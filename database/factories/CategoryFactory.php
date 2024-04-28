<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $names = ['Grains', 'Dairy', 'Bakery', 'Candies', 'Fruits', 'Vegetables', 'Meats'];

        return [
            'name' => $this->faker->randomElement($names),
            'description' => $this->faker->sentence,
        ];
    }
}
