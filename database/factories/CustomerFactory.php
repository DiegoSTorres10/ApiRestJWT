<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Customer::class;

    public function definition(): array
    {
        return [
            'FullName' => $this->faker->name,
            'Email' => $this->faker->unique()->safeEmail,
            'Phone' => $this->faker->phoneNumber,
            'Address' => $this->faker->address,

        ];
    }
}
