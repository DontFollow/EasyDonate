<?php namespace DontFollow\Payments\Components;

use Cms\Classes\ComponentBase;
use DontFollow\Shop\Models\Cart;

class UnitPay extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Виджет UnitPay',
            'description' => 'Виджет UnitPay для EasyDonate'
        ];
    }

    public function onRun()
    {
        $this->addJs('https://widget.unitpay.ru/unitpay.js');
    }

    public function onRender()
    {
        return [
            '@body' => $this->renderPartial('@unitpay')
        ];
    }
}
