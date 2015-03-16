<?php namespace Mohsin\Collapse\Models;

use Model;

/**
 * Entries Model
 */
class Entries extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mohsin_collapse_entries';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'title' => 'required',
        'content' => 'required'
    ];

}