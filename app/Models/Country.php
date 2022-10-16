<?php

namespace App\Models;

use \App\Model as Model;

/**
 * Class Country
 * @package App\Models
 * @version October 20, 2020, 2:30 pm UTC
 *
 * @property string code
 * @property string name
 * @property integer status
 */
class Country extends Model
{

    public $table = 'countries';
    



    public $search_fields = [
        'code',
        'name',
        'status'
    ];
    public $fillable = [
        'code',
        'name',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'code' => 'string',
        'name' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
