<?php namespace Rezokretien\Preche\Models;

use Model;

/**
 * Model
 */
class Preche extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
public $attachOne=[
  'auteur_preche'=>['System\Models\File', 'delete' => true],
    'Audio_preche'=>['System\Models\File', 'delete' => true],
  
];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'rezokretien_preche_';
}
