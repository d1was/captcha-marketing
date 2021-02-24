<?php namespace CaptchaMarketing\Service;

use Backend;
use System\Classes\PluginBase;

/**
 * Service Plugin Information File
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
            'name'        => 'Service',
            'description' => 'No description provided yet...',
            'author'      => 'CaptchaMarketing',
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
            'Captchamarketing\Service\Components\Services' => 'services'
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
            'captchamarketing.service.some_permission' => [
                'tab' => 'Service',
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
            'service' => [
                'label'       => 'Services',
                'url'         => Backend::url('captchamarketing/service/Services'),
                'icon'        => 'icon-leaf',
                'permissions' => ['captchamarketing.service.*'],
                'order'       => 500,
            ],
        ];
    }
}
