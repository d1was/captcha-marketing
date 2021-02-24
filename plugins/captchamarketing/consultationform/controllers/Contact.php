<?php namespace Captchamarketing\Consultationform\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Contact Back-end Controller
 */
class Contact extends Controller
{
    /**
     * @var array Behaviors that are implemented by this controller.
     */
    public $implement = [
        'Backend.Behaviors.ListController'
    ];


    /**
     * @var string Configuration file for the `ListController` behavior.
     */
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Captchamarketing.Consultationform', 'consultationform', 'contact');
    }


}
