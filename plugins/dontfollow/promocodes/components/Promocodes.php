<?php namespace DontFollow\Promocodes\Components;

use Flash;
use Session;
use Carbon\Carbon;
use ApplicationException;
use Cms\Classes\ComponentBase;
use DontFollow\Shop\Models\Cart;
use DontFollow\Servers\Models\Server;
use DontFollow\Promocodes\Models\Promocode;

class Promocodes extends ComponentBase
{
    protected $promocodes;

    public function componentDetails()
    {
        return [
            'name'        => 'Компонент для промокодов',
            'description' => 'Промокоды для EasyDonate.'
        ];
    }

    public function init()
    {
        $this->promocodes = Promocode::all();
    }

    public function onRender()
    {
        return [
            '@#cart-fields' => $this->renderPartial('@promocode_field')
        ];
    }

    public function onAcceptPromocode()
    {
        $server = Server::selected();
        if (!$server) {
            throw new ApplicationException('Пожалуйста, выберите сервер.');
        }

        if (!Session::has('username')) {
            return [
                '@body' => $this->renderPartial('@type_username_modal', [
                    'username' => Session::get('username')
                ])
            ];
        }

        $cart = Cart::instance();
        $username = Session::get('username');
        $this->page['cart'] = $cart;

        $code = post('code', false);
        if (!$code) {
            return false;
        }

        $promocode = $this->promocodes->where('code', $code)->first();
        if (!$promocode) {
            return false;
        }

        if (!$promocode->is_active) {
            throw new ApplicationException('Промокод больше недействителен.');
        }

        if ($promocode->expires_at && Carbon::now()->gte($promocode->expires_at)) {
            throw new ApplicationException('Срок действия промокода истек.');
        }

        if ($promocode->limit && $promocode->user && $promocode->user->uses >= $promocode->limit) {
            throw new ApplicationException('Достигнут лимит использования данного промокода.');
        }

        if ($promocode->servers && !in_array($server->id, $promocode->servers)) {
            throw new ApplicationException('Промокод не действует на выбранном Вами сервере.');
        }

        $cart->products->each(function ($product) use ($promocode) {
            if ($promocode->product_types && !in_array($product->type, $promocode->product_types)) {
                return false;
            }

            if ($promocode->products && !in_array($product->id, $promocode->products)) {
                return false;
            }

            $product->sale += round($product->cost * $promocode->sale / 100, 2);
            $product->save();
        });

        $this->page['cart'] = $cart;
        $promocode->fix($username);

        Flash::success('Промокод успешно активирован');
        return true;
    }

    public function onTypeUsername()
    {
        $username = post('username', false);
        if (!$username) {
            return false;
        }

        if (Session::has('username')) {
            return false;
        }

        Session::put('username', $username);
    }
}
