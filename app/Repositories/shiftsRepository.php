<?php

namespace App\Repositories;

use App\Models\Shifts;
use App\Repositories\BaseRepository;

/**
 * Class ShiftsRepository
 * @package App\Repositories
 * @version February 18, 2020, 3:58 pm UTC
*/

class ShiftsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'schift'
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
        return Shifts::class;
    }
}
