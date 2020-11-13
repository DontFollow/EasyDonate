<?php namespace DontFollow\Shop\Components;

use Event;
use Flash;
use Session;
use ApplicationException;
use Cms\Classes\ComponentBase;
use DontFollow\Shop\Models\Cart;
use DontFollow\Servers\Models\Server;
use DontFollow\Products\Models\Product;
use DontFollow\Products\Models\Category;
use DontFollow\Payments\Models\UnitPay as UnitPaySettings;

class Shop extends ComponentBase
{
    public $categories;
    public $products;
    public $cart;

    public function componentDetails()
    {
        return [
            'name'        => 'Магазин',
            'description' => 'Магазин для EasyDonate'
        ];
    }

    public function init()
    {
        $this->products = Product::all();
        $this->cart = Cart::instance();
    }

    public function onRun()
    {
        $this->page['cart'] = $this->cart;
        $this->page['username'] = $this->cart->owner;
        $this->page['products'] = $this->products->filter(function ($product) {
            return $product->servers->contains($this->cart->server);
        });
    }

    public function onRender()
    {
        return $this->renderPartial('shop');
    }

    public function onRenderProduct()
    {
        $product_id = post('product_id', false);
        if (!$product_id) {
            throw new ApplicationException('Что-то пошло не так. Пожалуйста, обновите страницу.');
        }

        $product = $this->products->where('id', $product_id)->first();
        if (!$product) {
            throw new ApplicationException('Товар не найден.');
        }

        $this->page['product'] = $product;
        $this->page['cart'] = $this->cart;
    }

    public function onAdd()
    {
        $product_id = post('product_id', false);
        if (!$product_id) {
            throw new ApplicationException('Что-то пошло не так. Пожалуйста, обновите страницу.');
        }

        $product = $this->products->where('id', $product_id)->first();
        if (!$product) {
            throw new ApplicationException('Этот товар не был найден.');
        }

        if ($this->cart->has($product)) {
            throw new ApplicationException('Этот товар уже добавлен в корзину.');
        }

        Event::fire('cart.product.add', [&$product]);

        $this->page['product'] = $this->cart->add($product);
        $this->page['cart'] = $this->cart;

        Event::fire('cart.product.added', [&$product]);
    }

    public function onRemove()
    {
        $product_id = post('product_id', false);
        if (!$product_id) {
            throw new ApplicationException('Что-то пошло не так. Пожалуйста, обновите страницу.');
        }

        $product = $this->products->where('id', $product_id)->first();
        if (!$product) {
            throw new ApplicationException('Этот товар не был найден.');
        }

        if (!$this->cart->has($product)) {
            throw new ApplicationException('Этот товар не добавлен в корзину.');
        }

        Event::fire('cart.product.remove', [&$product]);

        $this->page['product'] = $this->cart->remove($product);
        $this->page['cart'] = $this->cart;

        Event::fire('cart.product.removed', [&$product]);
    }

    public function onIncrease()
    {
        $product_id = post('product_id', false);
        if (!$product_id) {
            throw new ApplicationException('Что-то пошло не так. Пожалуйста, обновите страницу.');
        }

        $product = $this->cart->findBy('product_id', $product_id)->first();
        if (!$product) {
            throw new ApplicationException('Этот товар не был найден.');
        }

        Event::fire('cart.product.increase', [&$product]);
        $this->page['product'] = $this->cart->increase($product);
        $this->page['cart'] = $this->cart;
        Event::fire('cart.product.increased', [&$product]);
    }

    public function onDecrease()
    {
        $product_id = post('product_id', false);
        if (!$product_id) {
            throw new ApplicationException('Что-то пошло не так. Пожалуйста, обновите страницу.');
        }

        $product = $this->cart->findBy('product_id', $product_id)->first();
        if (!$product) {
            throw new ApplicationException('Этот товар не был найден.');
        }

        if ($product->count <= $product->number) {
            throw new ApplicationException('Количетсво товара не может быть ниже нуля.');
        }

        Event::fire('cart.product.decrease', [&$product]);
        $this->page['product'] = $this->cart->decrease($product);
        $this->page['cart'] = $this->cart;
        Event::fire('cart.product.decreased', [&$product]);
    }

    public function onFlush()
    {
        Event::fire('cart.product.flush', [&$product]);
        $this->cart->flush();
        Event::fire('cart.product.flushed', [&$product]);

        $this->page['products'] = $this->products;
        $this->page['cart'] = $this->cart;
    }

    public function onBuy()
    {
        $username = post('username', false);
        if (!$username) {
            throw new ApplicationException('Введите Ваш никнейм.');
        }

        $server = Server::selected();
        if (!$server) {
            throw new ApplicationException('Выберите сервер.');
        }

        if ($this->cart->empty()) {
            throw new ApplicationException('Ваша корзина пуста. Добавьте хотя бы один товар.');
        }

        Session::put('username', $username);

        Event::fire('shop.before.checkout', [&$this->cart]);
        $payment = $this->cart->checkout($username);

        if ($payment instanceof \Illuminate\Http\RedirectResponse) {
            $this->cart->flush();
            return $payment;
        }

        $this->page['products'] = $this->products;
        $this->page['cart'] = $this->cart;

        if ($payment) {
            return [
                'force' => false,
                'publicKey' => UnitPaySettings::get('public_key'),
                'sum' => $payment->cost,
                'account' => $payment->id,
                'signature' => hash('sha256', implode('{up}', [
                    $payment->id,
                    UnitPaySettings::get('currency', 'RUB'),
                    'Покупка товаров',
                    $payment->cost,
                    UnitPaySettings::get('secret_key')
                ])),
                'desc' => 'Покупка товаров',
                'locale' => UnitPaySettings::get('locale', 'ru'),
                'currency' => UnitPaySettings::get('currency', 'RUB')
            ];
        }

        Flash::success('Товары успешно выданы на сервере');
        return ['force' => true];
    }

    public function onSelectServer()
    {
        $server_id = post('server_id', false);
        if (!$server_id) {
            throw new ApplicationException('Что-то пошло не так. Пожалуйста, обновите страницу.');
        }

        $server = Server::find($server_id);
        if (!$server) {
            throw new ApplicationException('Выбранный вами сервер не был найден.');
        }

        $this->page['server'] = $server->remember();
        $this->page['cart'] = $this->cart;
        $this->page['products'] = $this->products->filter(function ($product) use ($server) {
            return $product->servers->contains($server);
        });
    }

    public function onSearchProducts()
    {
        $needle = post('search_name', false);

        if ($needle) {
            $this->page['products'] = $this->products->filter(function ($product) use ($needle) {
                return stristr($product->title, $needle);
            });
        } else {
            $this->page['products'] = $this->products;
        }        
    }
}
