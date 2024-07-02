<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Shipment;
use App\Models\StatusShipment;

class StatusShipmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StatusShipment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'shipment_id' => Shipment::factory(),
            'status' => $this->faker->randomElement(["pending","shipped","delivered","canceled"]),
            'via' => $this->faker->word(),
            'description' => $this->faker->text(),
        ];
    }
}
