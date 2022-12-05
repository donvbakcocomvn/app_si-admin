<?php

namespace App\Models;

use Eloquent as Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

/**
 * Class Field
 * @package App\Models
 * @version April 11, 2020, 1:57 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection market
 * @property string name
 * @property string description
 */
class FieldGroup extends Model implements HasMedia
{
    use HasMediaTrait {
        getFirstMediaUrl as protected getFirstMediaUrlTrait;
    }

    public $table = 'field_groups';



    public $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string', 
        'description' => 'string' 
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
    ]; 
    protected $appends = [
        'custom_fields',
        'fields'
    ];
 
}
