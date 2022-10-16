<?php

namespace App\Models;

use \App\Model as Model;

/**
 * Class Testimonial
 * @package App\Models
 * @version January 17, 2021, 10:03 am UTC
 *
 * @property string name
 * @property string image
 * @property string description
 * @property integer status
 */
class Testimonial extends Model
{

    public $table = 'testimonials';
    
    public $upload_path = 'uploads/testimonials';


    public $search_fields = [
        'name',
        'image',
        'description',
        'status'
    ];
    public $fillable = [
        'name',
        'image',
        'description',
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
        'description' => 'string',
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
