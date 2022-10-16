<?php

namespace App\Models;

use \App\Model as Model;

/**
 * Class Contact
 * @package App\Models
 * @version February 9, 2021, 8:16 am UTC
 *
 * @property string name
 * @property string email
 * @property string message
 * @property integer status
 */
class Contact extends Model
{

    public $table = 'contacts';
    



    public $search_fields = [
        'name',
        'email',
        'message',
        'status'
    ];
    public $fillable = [
        'name',
        'email',
        'message',
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
        'email' => 'string',
        'message' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required'
    ];

    
}
