<?php namespace Rezokretien\Event\Models;

use Model;

/**
 * Model
 */
class Event extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

public $attachOne=[
  'image_event' => ['System\Models\File','delete'=>true]
];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'rezokretien_event_';
}
