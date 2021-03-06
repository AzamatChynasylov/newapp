<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class ClassSheduling
 * @package App\Models
 * @version February 18, 2020, 4:09 pm UTC
 *
 * @property integer course_id
 * @property integer level_id
 * @property integer shift_id
 * @property integer classroom_id
 * @property integer batch_id
 * @property integer day_id
 * @property integer time_id
 * @property integer teacher_id
 * @property integer semester_id
 * @property time start_time
 * @property time end_time
 * @property boolean schedule_status
 */
class ClassSheduling extends Model
{

    public $table = 'class_shedulings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'course_id',
        'level_id',
        'shift_id',
        'classroom_id',
        'batch_id',
        'day_id',
        'time_id',
        'teacher_id',
        'semester_id',
        'start_time',
        'end_time',
        'schedule_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'schedule_id' => 'integer',
        'course_id' => 'integer',
        'level_id' => 'integer',
        'shift_id' => 'integer',
        'classroom_id' => 'integer',
        'batch_id' => 'integer',
        'day_id' => 'integer',
        'time_id' => 'integer',
        'teacher_id' => 'integer',
        'semester_id' => 'integer',
        'schedule_status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_id' => 'required',
        'level_id' => 'required',
        'shift_id' => 'required',
        'classroom_id' => 'required',
        'batch_id' => 'required',
        'day_id' => 'required',
        'time_id' => 'required',
        'teacher_id' => 'required',
        'semester_id' => 'required',
        'start_time' => 'required',
        'end_time' => 'required',
        'schedule_status' => 'required'
    ];

    
}
