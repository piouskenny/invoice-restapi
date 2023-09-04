<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    protected $model = Customer::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type =fake()->randomElement(['I', 'B']);
        $name = $type == "I" ?fake()->name() :fake()->company();

        return [
            'name' => $name,
            'type' => $type,
            'email' =>fake()->email(),
            'address' =>fake()->address(),
            'city' =>fake()->city(),
            'state' =>fake()->state(),
            'postal_code' =>fake()->postCode()
        ];
    }
}
