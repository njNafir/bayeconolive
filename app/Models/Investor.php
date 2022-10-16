<?php

namespace App\Models;

use \App\Model as Model;

/**
 * Class Investor
 * @package App\Models
 * @version April 24, 2021, 8:38 am UTC
 *
 * @property string name
 * @property string email
 * @property string phone
 * @property string city
 * @property string country
 * @property string address
 * @property string message_type
 * @property string message_details
 * @property integer status
 */
class Investor extends Model
{

    public $table = 'investors';
    




    public $upload_path = 'uploads/investors';

    public $search_fields = [
        'name',
        'email',
        'phone',
        'city',
        'country',
        'address',
        'message_type',
        'message_details',
        'status'
    ];
    public $fillable = [
        'name',
        'email',
        'phone',
        'city',
        'country',
        'address',
        'message_type',
        'message_details',
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
        'phone' => 'string',
        'city' => 'string',
        'country' => 'string',
        'address' => 'string',
        'message_type' => 'string',
        'message_details' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'city' => 'required'
    ];

    
}
