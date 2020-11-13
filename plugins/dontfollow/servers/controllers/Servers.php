<?php namespace DontFollow\Servers\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Servers Back-end Controller
 */
class Servers extends Controller
{
    public $requiredPermissions = ['dontfollow.servers.*'];

    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $bodyClass = 'compact-container breadcrumb-fancy';

    public function __construct()
    {
        parent::__construct();

        $this->addJs('/plugins/dontfollow/servers/assets/js/servers-form.js');

        BackendMenu::setContext('DontFollow.Servers', 'servers', 'showServers');
    }
}
