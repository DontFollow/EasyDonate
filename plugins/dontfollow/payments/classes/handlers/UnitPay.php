<?php namespace DontFollow\Payments\Classes\Handlers;

use Request;
use Response;
use DontFollow\Shop\Models\Cart;
use DontFollow\Shop\Classes\Delivery;
use DontFollow\Payments\Models\Payment;
use DontFollow\Payments\Models\UnitPay as UnitPaySettings;

class UnitPay
{
    private $params;
    private $method;
    private $payment;

    public function __construct()
    {
        // if (!in_array(Request::ip(), config('dontfollow.payments::unitpay.ip'))) {
        //     return $this->response('Hacking attempt!');
        // }

        $this->params = get('params', false);
        if (!$this->params) {
            return $this->response();
        }

        $this->method = get('method', false);
        if (!$this->method) {
            return $this->response();
        }

        $this->payment = Payment::find($this->params['account']);
        if (!$this->payment) {
            return $this->response('Платеж не найден.');
        }

        if (!method_exists($this, $this->method)) {
            return $this->response();
        }

        return call_user_func([$this, $this->method]);
    }

    private function check()
    {
        if ($this->payment->status !== 0) {
            return $this->response('Платеж уже завершен или находится в обработке.');
        }

        if (!$this->checkSignature()) {
            return $this->response('Платеж некорректен.');
        }

        if (!$this->payment->increment('status')) {
            return $this->response();
        }

        return $this->response('Платеж валиден.', 'result');
    }

    private function pay()
    {
        if ($this->payment->status !== 1) {
            return $this->response('Платеж уже завершен или находится в обработке.');
        }

        if (!$this->checkSignature()) {
            return $this->response('Платеж некорректен.');
        }

        if (!$this->payment->server) {
            return $this->response('Сервер для выдачи товаров не найден.');
        }

        $delivery = new Delivery($this->payment);
        if ($delivery->deliver() && $this->payment->increment('status')) {
            return $this->response('Платеж совершен.', 'result');
        }

        return $this->response();
    }

    private function checkSignature()
    {
        $this->params['account'] = $this->payment->id;

        $signature = $this->params['signature'];

        unset($this->params['sign']);
        unset($this->params['signature']);

        ksort($this->params);

        array_unshift($this->params, $this->method);
        array_push($this->params, UnitPaySettings::get('secret_key'));

        return strcmp(hash('sha256', implode('{up}', $this->params)), $signature) === 0;
    }

    private function response($message = 'Что-то пошло не так.', $status = 'error')
    {
        header('Content-Type: application/json; charset=utf-8');
        exit(json_encode([$status => ['message' => $message]], JSON_UNESCAPED_UNICODE));
    }
}
