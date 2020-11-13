<?php namespace DontFollow\Products\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Products Back-end Controller
 */
class Products extends Controller
{
    public $requiredPermissions = ['dontfollow.products.*'];

    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.ImportExportController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $importExportConfig  = 'config_import_export.yaml';

    public $bodyClass = 'compact-container breadcrumb-fancy';

    public function __construct()
    {
        parent::__construct();

        $this->addJs('/plugins/dontfollow/products/assets/js/products-form.js');

        BackendMenu::setContext('DontFollow.Products', 'products', 'showProducts');
    }
}
