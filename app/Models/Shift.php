<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Shift
 * @package App\Models
 * @version February 18, 2020, 4:02 pm UTC
 *
 * @property string schift
 */
class Shift extends Model
{

    public $table = 'shifts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'schift'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'schift_id' => 'integer',
        'schift' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'schift' => 'required'
    ];

    
}
