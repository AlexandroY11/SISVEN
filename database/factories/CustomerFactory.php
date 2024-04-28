<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'document_number' => $this->faker->unique()->randomNumber(8),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'address' => $this->faker->address,
            'birthday' => $this->faker->date,
            'phone_number' => substr(mt_rand(1000000000, 9999999999), 0, 16),
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
