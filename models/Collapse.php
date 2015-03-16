<?php namespace Mohsin\Collapse\Models;

use Model;

/**
 * Collapse Model
 */
class Collapse extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'mohsin_collapse_collapses';

    /**
     * @var array Relations
     */
    public $hasMany = [
        'entries' => ['Mohsin\Collapse\Models\Entries', 'table' => 'mohsin_collapse_entries', 'order' => 'position asc']
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'entries' => 'required'
    ];

}