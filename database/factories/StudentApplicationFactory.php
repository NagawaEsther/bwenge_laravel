<?php

namespace Database\Factories;

use App\Models\StudentApplication;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentApplicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentApplication::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date_of_birth' => $this->faker->word,
        'address' => $this->faker->word,
        'status' => $this->faker->randomElement(]),
        'program_id' => $this->faker->randomDigitNotNull,
        'user_id' => $this->faker->randomDigitNotNull,
        'nationality' => $this->faker->word,
        'guardian_name' => $this->faker->word,
        'guardian_contact' => $this->faker->word,
        'interview_date' => $this->faker->word,
        'interview_result' => $this->faker->randomElement(]),
        'submitted_documents' => $this->faker->word,
        'secondary_school' => $this->faker->word,
        'combination' => $this->faker->word,
        'points_scored' => $this->faker->randomDigitNotNull,
        'uace_year_of_completion' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
