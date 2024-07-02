<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Account;
use App\Models\Jurnal;
use App\Models\JurnalDetail;

class JurnalDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JurnalDetail::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'jurnal_id' => Jurnal::factory(),
            'account_id' => Account::factory(),
            'amount' => $this->faker->randomFloat(2, 0, 99999999.99),
            'type' => $this->faker->randomElement(["debit","credit"]),
        ];
    }
}
