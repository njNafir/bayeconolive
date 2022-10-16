<?php

namespace App\Models;

use \App\Model as Model;

/**
 * Class Blog
 * @package App\Models
 * @version November 4, 2020, 12:10 pm UTC
 *
 * @property integer user_id
 * @property string title
 * @property string description
 * @property string image
 * @property integer status
 */
class Blog extends Model
{

    public $table = 'blogs';
    
    public $upload_path = 'uploads/blogs';

    public function user(){
        return $this->belongsTo('\App\User', 'user_id');
    }
    



    public $search_fields = [
        'user_id',
        'title',
        'description',
        'image',
        'status'
    ];
    public $fillable = [
        'user_id',
        'title',
        'description',
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
        'user_id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'image' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg|max:2048'
    ];

    
}
