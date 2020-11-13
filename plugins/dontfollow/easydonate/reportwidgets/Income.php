<?php namespace DontFollow\EasyDonate\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use DontFollow\Servers\Models\Server;
use DontFollow\Payments\Models\Payment;

class Income extends ReportWidgetBase
{
    public function defineProperties()
    {
        return [
            'title' => [
                'title'   => 'Прибыль',
                'default' => 'Прибыль'
            ]
        ];
    }

    public function render()
    {
        $payments = Payment::whereStatus(2)->get();
        $servers = Server::all();

        foreach ($servers as $server) {
            $income = 0;

            $payments->where('server_id', $server->id)->each(function ($payment) use (&$income) {
                $income += $payment->cost;
            });

            $server->income = $income;
        }

        return $this->makePartial('income', [
            'servers' => $servers
        ]);
    }
}
