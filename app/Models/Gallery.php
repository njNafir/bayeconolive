<?php

namespace App\Models;

use \App\Model as Model;

/**
 * Class Gallery
 * @package App\Models
 * @version February 9, 2021, 9:31 am UTC
 *
 * @property string name
 * @property string image
 * @property integer status
 */
class Gallery extends Model
{

    public $table = 'galleries';
    
    public $upload_path = 'uploads/galleries';

    public $search_fields = [
        'name',
        'image',
        'status'
    ];
    public $fillable = [
        'name',
        'image',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'image' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg|max:2048'
    ];

    
}
