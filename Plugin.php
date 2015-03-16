<?php namespace Mohsin\Collapse;

use Backend;
use System\Classes\PluginBase;
use System\Classes\CombineAssets;
use System\Classes\SettingsManager;

/**
 * Collapse Plugin Information File
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
            'name'        => 'Collapse',
            'description' => 'Create accordion-like collapsable lists',
            'author'      => 'Mohsin',
            'icon'        => 'icon-align-justify'
        ];
    }

    public function registerComponents()
    {
      return [
        'Mohsin\Collapse\Components\Collapse' => 'collapse'
      ];
    }

    public function registerSettings()
    {
      return [
        'collapse' => [
          'label'       => 'Collapse',
          'url'         => Backend::url('mohsin/collapse/collapse'),
          'description' => 'Create collapseable accordions',
          'icon'        => 'icon-align-justify',
          'permissions' => ['mohsin.collapse.*'],
          'order'       => 212
        ],
      ];
    }

  public function registerFormWidgets()
  {
      return [
          'Owl\FormWidgets\HasMany\Widget' => [
              'label' => 'Hasmany',
              'code' => 'owl-hasmany'
          ],
      ];
  }

}
