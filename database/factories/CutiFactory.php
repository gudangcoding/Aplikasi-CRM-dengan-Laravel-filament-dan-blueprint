<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Cuti;
use App\Models\Employee;

class CutiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cuti::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'employee_id' => Employee::factory(),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'type' => $this->faker->randomElement(["aktif","cuti"]),
            'status' => $this->faker->randomElement(["pending","accepted","rejected"]),
            'reason' => $this->faker->text(),
        ];
    }
}
