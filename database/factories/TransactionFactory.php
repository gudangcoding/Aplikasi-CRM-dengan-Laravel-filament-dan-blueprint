<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Account;
use App\Models\Transaction;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'account_id' => Account::factory(),
            'date' => $this->faker->date(),
            'type' => $this->faker->randomElement(["aset","kewajiban","modal","beban","pengeluaran","pendapatan"]),
            'amount' => $this->faker->randomFloat(2, 0, 99999999.99),
            'description' => $this->faker->text(),
        ];
    }
}
