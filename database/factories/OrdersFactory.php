<?php

namespace Database\Factories;

use App\Models\Orders;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrdersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Orders::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'              => $this->faker->name,
            'phone'             => $this->faker->phoneNumber,
//            'model'             => $this->faker->text(100),
//            'color'             => $this->faker->randomElement(['золото','белый','черный','желтый','красный','синий']),
//            'price'             => $this->faker->randomFloat(2,50, 10000),
            'sale_type'         => $this->faker->randomElement(['Самовывоз','Доставка','Почта','СДЭК']),
            'receive'     => $this->faker->randomElement(['Наличные', 'Карта', 'Чек', 'СБЕР', 'Тинькофф']),
            'address'           => $this->faker->address,
            'delivery_price'    => $this->faker->randomFloat(2,200, 800),
            'store'             => $this->faker->randomElement(['MyDilly', 'BabyWatch', 'PBS', 'Magic-Karaoke']),
            'status'            => $this->faker->randomElement(['process', 'sold', 'refused', 'shipped']),
            'sale_date'         => $this->faker->dateTimeBetween('-2 month', 'now'),
        ];
    }
}
