<?php namespace Captchamarketing\ConsultationForm;

use Backend;
use System\Classes\PluginBase;

/**
 * ConsultationForm Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'ConsultationForm',
            'description' => 'No description provided yet...',
            'author'      => 'captchamarketing',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'Captchamarketing\ConsultationForm\Components\ContactForm' => 'contactForm',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'captchamarketing.consultationform.some_permission' => [
                'tab' => 'ConsultationForm',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {

        return [
            'consultationform' => [
                'label'       => 'Consultation Form',
                'url'         => Backend::url('captchamarketing/consultationform/Contact'),
                'icon'        => 'icon-leaf',
                'permissions' => ['captchamarketing.consultationform.*'],
                'order'       => 500,
            ],
        ];
    }

    public function registerMarkupTags()
    {
        return [
            'functions' => [
                'base_path' => function($path) {
                    return base_path($path);
                },
                'themes_path' => function($path) {
                    return themes_path($path);
                }
            ]
        ];
    }
}
