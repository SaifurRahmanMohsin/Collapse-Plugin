<?php namespace Mohsin\Collapse\Components;

use Cms\Classes\ComponentBase;
use System\Classes\CombineAssets;
use Mohsin\Collapse\Models\Collapse as CollapseModel;

class Collapse extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Collapse Component',
            'description' => 'Generates an accordion style collapse'
        ];
    }

    public function defineProperties()
    {
      return [
      'CollapseName' => [
        'title'        => 'Collapse Title',
        'description'  => 'The friendly name of the collapse',
        'type'         => 'dropdown'
        ],
      ];
    }

    public function onRun()
    {
      $js  = [ 'assets/js/collapse.js' ];
      $this -> addJs(CombineAssets::combine($js, __DIR__));
    }

    public function getCollapseNameOptions()
    {
      return CollapseModel::select('name', 'name')->orderBy('name')->get()->lists('name', 'name');
    }

    public function onRender()
    {
      $collapse = new CollapseModel;
      $this -> collapse = $this -> page['collapse'] = $collapse->where('name', '=', $this -> property('CollapseName')) -> first();
    }

}