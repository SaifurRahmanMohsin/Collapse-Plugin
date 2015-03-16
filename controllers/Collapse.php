<?php namespace Mohsin\Collapse\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use System\Classes\SettingsManager;

/**
 * Collapse Back-end Controller
 */
class Collapse extends Controller
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
        SettingsManager::setContext('Mohsin.Collapse', 'collapse');
        BackendMenu::setContext('October.System', 'system', 'collapse');
    }
}