<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Course
 * @package App\Models
 * @version February 19, 2020, 7:31 am UTC
 *
 * @property string course_name
 * @property string course_code
 * @property string course_description
 * @property boolean course_status
 */
class Course extends Model
{

		public $table = 'courses';
		
		protected $primaryKey = 'course_id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'course_name',
        'course_code',
        'course_description',
        'course_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'course_id' => 'integer',
        'course_name' => 'string',
        'course_code' => 'string',
        'course_description' => 'string',
        'course_status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_name' => 'required',
        'course_code' => 'required',
        'course_description' => 'required',
        'course_status' => 'required'
    ];

    
}
