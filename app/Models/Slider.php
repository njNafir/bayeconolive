<?php

namespace App\Models;

use \App\Model as Model;

/**
 * Class Slider
 * @package App\Models
 * @version November 1, 2020, 10:34 am UTC
 *
 * @property string title
 * @property string title_sub
 * @property string image
 * @property string description
 * @property string read_more_title
 * @property string read_more_link
 * @property integer status
 */
class Slider extends Model
{

    public $table = 'sliders';

    public $upload_path = 'uploads/sliders';
    



    public $search_fields = [
        'title',
        'title_sub',
        'image',
        'description',
        'read_more_title',
        'read_more_link',
        'status'
    ];
    public $fillable = [
        'title',
        'title_sub',
        'image',
        'description',
        'read_more_title',
        'read_more_link',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'title_sub' => 'string',
        'image' => 'string',
        'description' => 'string',
        'read_more_title' => 'string',
        'read_more_link' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        // 'title_sub' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        // 'read_more_title' => 'required',
        // 'read_more_link' => 'required'
    ];

    
}
