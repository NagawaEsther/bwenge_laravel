<?php

namespace App\Repositories;

use App\Models\StudentApplication;
use App\Repositories\BaseRepository;

/**
 * Class StudentApplicationRepository
 * @package App\Repositories
 * @version January 30, 2025, 3:24 pm UTC
*/

class StudentApplicationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'date_of_birth',
        'address',
        'status',
        'program_id',
        'user_id',
        'nationality',
        'guardian_name',
        'guardian_contact',
        'interview_date',
        'interview_result',
        'submitted_documents',
        'secondary_school',
        'combination',
        'points_scored',
        'uace_year_of_completion'
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
        return StudentApplication::class;
    }
}
