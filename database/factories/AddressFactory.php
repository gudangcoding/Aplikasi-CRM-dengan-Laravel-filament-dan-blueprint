<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Address;
use App\Models\Employee,Customer,Supplier;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => Employee,Customer,Supplier::factory(),
            'label' => $this->faker->word(),
            'type' => $this->faker->randomElement(["admin","employee","customer","supplier"]),
            'alamat' => $this->faker->text(),
        ];
    }
}
