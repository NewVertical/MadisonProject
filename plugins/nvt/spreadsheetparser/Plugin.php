<?php namespace NVT\SpreadsheetParser;

use Backend;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'SpreadsheetParser',
            'description' => 'No description provided yet...',
            'author' => 'NVT',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        //
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'NVT\SpreadsheetParser\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'nvt.spreadsheetparser.some_permission' => [
                'tab' => 'SpreadsheetParser',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'spreadsheetparser' => [
                'label' => 'SpreadsheetParser',
                'url' => Backend::url('nvt/spreadsheetparser/mycontroller'),
                'icon' => 'icon-leaf',
                'permissions' => ['nvt.spreadsheetparser.*'],
                'order' => 500,
            ],
        ];
    }
}
