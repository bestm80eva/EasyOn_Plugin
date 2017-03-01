<?php namespace EasyOn\Admin\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Config extends Controller
{
    public $implement = ['Backend\Behaviors\FormController'];
    
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Easyon.Admin', 'main-menu-item', 'side-menu-item');
    }
}