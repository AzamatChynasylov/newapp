<?php

namespace App\Repositories;

use App\Models\Class;
use App\Repositories\BaseRepository;

/**
 * Class ClassRepository
 * @package App\Repositories
 * @version February 18, 2020, 4:04 pm UTC
*/

class ClassRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'class_name',
        'class_code'
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
        return Class::class;
    }
}
