<?php

namespace Database\Factories;

use App\Models\Paymode;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paymode::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $names = ['Nequi', 'Bancolombia', 'BBVA', 'Davivienda', 'Banco de Bogotá', 'Banco de Occidente', 'Banco Popular', 'Banco AV Villas', 'Banco Caja Social', 'Banco GNB Sudameris'];

        return [
            'name' => $this->faker->randomElement($names),
            'observation' => $this->faker->sentence,
        ];
    }

}
