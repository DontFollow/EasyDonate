<?php namespace DontFollow\Payments\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Payments Back-end Controller
 */
class Payments extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        $this->addCss('/plugins/dontfollow/payments/assets/css/payments.css');

        BackendMenu::setContext('DontFollow.Payments', 'payments', 'payments');
    }
}
