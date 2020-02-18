<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Attendance
 * @package App\Models
 * @version February 18, 2020, 4:06 pm UTC
 *
 * @property integer student_id
 * @property integer class_id
 * @property integer subject_id
 * @property integer teacher_id
 * @property integer attendance_status
 */
class Attendance extends Model
{

    public $table = 'attendances';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'student_id',
        'class_id',
        'subject_id',
        'teacher_id',
        'attendance_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'attendance_id' => 'integer',
        'student_id' => 'integer',
        'class_id' => 'integer',
        'subject_id' => 'integer',
        'teacher_id' => 'integer',
        'attendance_status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student_id' => 'required',
        'class_id' => 'required',
        'subject_id' => 'required',
        'teacher_id' => 'required',
        'attendance_status' => 'required'
    ];

    
}
