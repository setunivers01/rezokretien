<?php namespace Rezokretien\Verset\Models;

use Model;

/**
 * Model
 */
class Verset extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'rezokretien_verset_';
}
