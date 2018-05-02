<?php namespace Rezokretien\Music\Models;

use Model;

/**
 * Model
 */
class Music extends Model
{
    use \October\Rain\Database\Traits\Validation;
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'music' => ['System\Models\File', 'delete' => true],
        'cover' => ['System\Models\File', 'delete' => true]

    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'rezokretien_music_';
}
