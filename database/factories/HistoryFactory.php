<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\History>
 */
class HistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement(['Deposit', 'Withdraw']);

        return [
            'amount' =>$this->faker->randomNumber(3, true),
            'type'=>$type,
            'receiver'=>$this->faker->safeEmail(),
            'time'=>$this->faker->dateTime()->format('d-m-Y H:i:s')
        ];
    }
}
