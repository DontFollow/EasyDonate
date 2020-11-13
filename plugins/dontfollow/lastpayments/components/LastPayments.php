<?php namespace DontFollow\LastPayments\Components;

use Cms\Classes\ComponentBase;
use DontFollow\Payments\Models\Payment;
use DontFollow\LastPayments\Models\Settings;

class LastPayments extends ComponentBase
{
    private $enabled;
    private $payments;
    private $limit;
    private $items;

    public function componentDetails()
    {
        return [
            'name'        => 'Компонент последних покупок',
            'description' => 'Встраиваемый виджет последних покупок игроков.'
        ];
    }

    public function init()
    {
        $this->enabled = Settings::get('enabled', true);
        
        if ($this->enabled) {
            $this->limit = Settings::get('limit', 10);
            $this->items = Settings::get('items', 6);
            $this->payments = Payment::whereStatus(2)->orderBy('created_at', 'asc')->take($this->limit)->get();
        }
    }

    public function onRender()
    {
        if ($this->enabled) {
            return [
                '@#sections' => $this->renderPartial('@last_payments', [
                    'payments' => $this->payments,
                    'items' => $this->items
                ])
            ];
        }
    }
}
