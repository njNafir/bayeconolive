<?php

namespace App\Models;

use \App\Model as Model;

/**
 * Class Partner
 * @package App\Models
 * @version January 14, 2021, 1:25 pm UTC
 *
 * @property string name
 * @property string image
 * @property integer status
 */
class Partner extends Model
{

    public $table = 'partners';
    
    public $upload_path = 'uploads/partners';


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
