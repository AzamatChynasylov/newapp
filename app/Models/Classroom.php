<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Classroom
 * @package App\Models
 * @version February 18, 2020, 4:04 pm UTC
 *
 * @property string classroom_name
 * @property string classroom_code
 * @property string classroom_description
 * @property boolean classroom_status
 */
class Classroom extends Model
{

    public $table = 'classrooms';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'classroom_name',
        'classroom_code',
        'classroom_description',
        'classroom_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'classroom_id' => 'integer',
        'classroom_name' => 'string',
        'classroom_code' => 'string',
        'classroom_description' => 'string',
        'classroom_status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'classroom_name' => 'required',
        'classroom_code' => 'required',
        'classroom_description' => 'required',
        'classroom_status' => 'required'
    ];

    
}
