<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\ShipmentDetail;

class ShipmentDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ShipmentDetail::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'tracking_number' => $this->faker->word(),
            'sender_address' => $this->faker->word(),
            'recipient_address' => $this->faker->word(),
            'weight' => $this->faker->randomFloat(2, 0, 999.99),
            'volume' => $this->faker->randomFloat(2, 0, 999.99),
            'status' => $this->faker->randomElement(["pending","shipped","delivered","canceled"]),
            'customer_id' => Customer::factory(),
        ];
    }
}
