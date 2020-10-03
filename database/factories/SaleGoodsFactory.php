<?php

namespace Database\Factories;

use App\Models\SaleGoods;
use App\Models\Orders;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleGoodsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SaleGoods::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
//            'orders_id'         => Orders::factory(),
            'name'             => $this->faker->text(100),
            'color'            => $this->faker->randomElement(['золото','белый','черный','желтый','красный','синий']),
            'price'            => $this->faker->randomFloat(2,50, 10000),
        ];
    }
}
