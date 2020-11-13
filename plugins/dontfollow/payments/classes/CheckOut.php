<?php namespace DontFollow\Payments\Classes;

use Redirect;
use DontFollow\Shop\Classes\Delivery;
use DontFollow\Servers\Models\Server;
use DontFollow\Payments\Models\Payment;
use DontFollow\Payments\Models\UnitPay;
use DontFollow\Products\Models\Product;
use DontFollow\Payments\Models\PaymentProduct;

class CheckOut
{
    private static $payment;

    public static function make($customer, $cart, $force = false)
    {
        self::$payment = new Payment;
        self::$payment->customer = $customer;
        self::$payment->server()->add($cart->server);
        self::$payment->save();
        $cart->products->each(function ($product) {
            self::$payment->products()->add(
                new PaymentProduct($product->toArray())
            );
        });

        if ($force) {
            $delivery = new Delivery(self::$payment);
            $delivery->deliver();
            return false;
        }

        if (UnitPay::get('use_widget', true)) {
            return self::$payment;
        }

        return self::redirect();
    }

    private static function redirect()
    {
        // https://unitpay.ru/pay/PUBLIC-KEY?sum&account&desc&signature

        $public_key = UnitPay::get('public_key', false);
        $private_key = UnitPay::get('secret_key', false);

        if (!$public_key || !$private_key) {
            return false;
        }

        $uri = "https://unitpay.ru/pay/{$public_key}";
        $params = http_build_query([
            'sum' => self::$payment->cost,
            'account' => self::$payment->id,
            'desc' => 'Покупка товаров',
            'locale' => UnitPay::get('locale', 'ru'),
            'currency' => UnitPay::get('currency', 'RUB'),
            'signature' => hash('sha256', implode('{up}', [
                self::$payment->id,
                UnitPay::get('currency', 'RUB'),
                'Покупка товаров',
                self::$payment->cost,
                $private_key
            ]))
        ]);

        return Redirect::to(implode('?', [$uri, $params]));
    }
}
