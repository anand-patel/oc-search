<?php namespace AnandPatel\Search;

use System\Classes\PluginBase;

/**
 * Search Plugin Information File
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
            'name'        => 'Search',
            'description' => 'Plugin provides search facility',
            'author'      => 'Anand Patel',
            'icon'        => 'icon-search'
        ];
    }

    public function registerComponents()
    {
        return [
            'AnandPatel\Search\Components\Search' => 'Search',
        ];
    }

}
