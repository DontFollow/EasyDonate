<?php namespace DontFollow\Promocodes\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Promocodes Back-end Controller
 */
class Promocodes extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $bodyClass = 'compact-container breadcrumb-fancy';

    public function __construct()
    {
        parent::__construct();

        $this->addJs('/plugins/dontfollow/products/assets/js/products-form.js');

        BackendMenu::setContext('DontFollow.Promocodes', 'promocodes', 'showPromocodes');
    }
}
