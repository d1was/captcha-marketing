<?php

namespace Captchamarketing\Service\Controllers;

class Services extends \Backend\Classes\Controller
{
    public $implement = ['Backend.Behaviors.FormController', 'Backend.Behaviors.ListController'];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'list_config.yaml';



}
