<?php namespace Rezokretien\Predication\Models;

use Model;

/**
 * Model
 */
class Predication extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'image_Auteur' => ['System\Models\File', 'delete' => true],
        'audio_predication' => ['System\Models\File', 'delete' => true]


    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'rezokretien_predication_';
}
