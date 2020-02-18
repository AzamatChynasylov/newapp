<?php

namespace App\Repositories;

use App\Models\classrooms;
use App\Repositories\BaseRepository;

/**
 * Class classroomsRepository
 * @package App\Repositories
 * @version February 18, 2020, 3:55 pm UTC
*/

class classroomsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'classroom_name',
        'classroom_code',
        'classroom_description',
        'classroom_status'
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
        return classrooms::class;
    }
}
