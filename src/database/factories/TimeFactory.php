<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Time;

class TimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'year' => $this->faker->dateTimeBetween('-1 week')->format(Y),
            'month' => $this->faker->dateTimeBetween('-1 week')->format(n),
            'day' => $this->faker->dateTimeBetween('-1 week')->format(j),
            'check_in' => $this->faker->dateTimeBetween('-1 week'),
            'check_out' => $this->faker->dateTimeBetween('-1 week'),
        ];
    }
}
