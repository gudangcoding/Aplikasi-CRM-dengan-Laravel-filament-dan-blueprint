<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\Shipment;
use App\Models\StatusShipment;
use App\Models\User;

class ShipmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shipment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'customer_id' => Customer::factory(),
            'status_id' => StatusShipment::factory(),
            'current_location' => $this->faker->word(),
            'estimated_delivery' => $this->faker->date(),
        ];
    }
}
