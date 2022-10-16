<?php

namespace App\Models;

use \App\Model as Model;

/**
 * Class Faq
 * @package App\Models
 * @version January 17, 2021, 11:31 am UTC
 *
 * @property string title
 * @property string answer
 * @property integer status
 */
class Faq extends Model
{

    public $table = 'faqs';
    



    public $search_fields = [
        'title',
        'answer',
        'status'
    ];
    public $fillable = [
        'title',
        'answer',
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
        'answer' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];

    
}
