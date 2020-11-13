<?php namespace DontFollow\Surcharge\Components;

use Session;
use Cms\Classes\ComponentBase;
use DontFollow\Shop\Models\Cart;
use DontFollow\Products\Models\Product;

class Surcharge extends ComponentBase
{
    protected $cart;
    protected $accept;

    public function componentDetails()
    {
        return [
            'name'        => 'Компонент доплаты',
            'description' => 'Оповещение о том, что на сайте работает система доплаты.'
        ];
    }

    public function init()
    {
        $this->accept = Session::get('Surcharge.accept', false);
        $this->cart = Cart::instance();
    }

    public function onRender()
    {
        if (!$this->accept) {
            return [
                '^body' => $this->renderPartial('@alert', [
                    'username' => Session::get('username', false)
                ])
            ];
        }
    }

    public function onAcceptSurcharge()
    {
        return Session::put('Surcharge.accept', true);
    }

    public function onAcceptUsername()
    {
        Session::put('username', post('username', false));

        $this->page['products'] = Product::all()->filter(function ($product) {
            return $product->servers->contains($this->cart->server);
        });
    }
}
