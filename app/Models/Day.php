<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Day
 * @package App\Models
 * @version February 18, 2020, 4:07 pm UTC
 *
 * @property string day
 */
class Day extends Model
{

    public $table = 'days';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'day'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'day_id' => 'integer',
        'day' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'day' => 'required'
    ];

    
}
