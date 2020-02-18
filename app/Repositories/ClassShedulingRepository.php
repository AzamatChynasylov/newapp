<?php

namespace App\Repositories;

use App\Models\ClassSheduling;
use App\Repositories\BaseRepository;

/**
 * Class ClassShedulingRepository
 * @package App\Repositories
 * @version February 18, 2020, 4:09 pm UTC
*/

class ClassShedulingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ClassSheduling::class;
    }
}
