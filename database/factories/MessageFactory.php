<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween($min = 1, $max = 5),
            'to_user_id' => $this->faker->numberBetween($min = 6, $max = 10),
            'message' => $this->faker->text(),
            'is_active' => $this->faker->numberBetween($min = 0, $max = 1),
            'is_read'=> $this->faker->numberBetween($min = 0, $max = 1),
        ];
    }
}
