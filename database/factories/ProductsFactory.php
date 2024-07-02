<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Products;

class ProductsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Products::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'satuan' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'harga_beli' => $this->faker->randomFloat(2, 0, 99999999.99),
            'harga_jual' => $this->faker->randomFloat(2, 0, 99999999.99),
            'ukuran_kemasan' => $this->faker->word(),
            'volume' => $this->faker->randomFloat(2, 0, 99999999.99),
            'berat' => $this->faker->randomFloat(2, 0, 99999999.99),
            'stok' => $this->faker->numberBetween(-10000, 10000),
            'aktif' => $this->faker->randomElement(["Y","N"]),
        ];
    }
}
