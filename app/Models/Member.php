<?php

namespace App\Models;

use \App\Model as Model;

/**
 * Class Member
 * @package App\Models
 * @version February 10, 2021, 10:29 am UTC
 *
 * @property string name
 * @property string position
 * @property string intro
 * @property string image
 * @property string description
 * @property integer status
 */
class Member extends Model
{

    public $table = 'members';
    
    public $upload_path = 'uploads/members';

    public $search_fields = [
        'name',
        'position',
        'intro',
        'image',
        'description',
        'status'
    ];
    public $fillable = [
        'name',
        'position',
        'intro',
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
        'position' => 'string',
        'intro' => 'string',
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
        'position' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg|max:2048'
    ];

    
}
