<?php namespace Wiz\Clients\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use System\Classes\SettingsManager;

class Clients extends Controller
{
    public $implement = [
        \Backend\Behaviors\ListController::class,
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ReorderController::class
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'wiz.Clients.manage_clients' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Wiz.Clients', 'clients');
    }
}
