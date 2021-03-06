<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Academic
 * @package App\Models
 * @version February 18, 2020, 4:06 pm UTC
 *
 * @property string academic_year
 */
class Academic extends Model
{

    public $table = 'academics';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'academic_year'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'academic_id' => 'integer',
        'academic_year' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'academic_year' => 'required'
    ];

    
}
