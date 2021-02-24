<?php namespace Captchamarketing\Testimonials;

use Backend;
use System\Classes\PluginBase;

/**
 * testimonials Plugin Information File
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
            'name'        => 'testimonials',
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
            'Captchamarketing\Testimonials\Components\TestimonialList' => 'testimonialList',
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
            'captchamarketing.testimonials.some_permission' => [
                'tab' => 'testimonials',
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
            'testimonials' => [
                'label'       => 'Testimonials',
                'url'         => Backend::url('captchamarketing/testimonials/testimonials'),
                'icon'        => 'icon-user',
                'permissions' => ['captchamarketing.testimonials.*'],
                'order'       => 500,
            ],
        ];
    }
}
