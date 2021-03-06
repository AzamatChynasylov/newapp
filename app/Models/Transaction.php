<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Transaction
 * @package App\Models
 * @version February 18, 2020, 4:10 pm UTC
 *
 * @property integer student_id
 * @property integer fee_id
 * @property integer user_id
 * @property integer paid_id
 * @property string transaction_date
 * @property string remark
 * @property string describtion
 */
class Transaction extends Model
{

    public $table = 'transactions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'student_id',
        'fee_id',
        'user_id',
        'paid_id',
        'transaction_date',
        'remark',
        'describtion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'transaction_id' => 'integer',
        'student_id' => 'integer',
        'fee_id' => 'integer',
        'user_id' => 'integer',
        'paid_id' => 'integer',
        'transaction_date' => 'date',
        'remark' => 'string',
        'describtion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student_id' => 'required',
        'fee_id' => 'required',
        'user_id' => 'required',
        'paid_id' => 'required',
        'transaction_date' => 'required',
        'remark' => 'required',
        'describtion' => 'required'
    ];

    
}
