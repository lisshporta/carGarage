<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'brand' => $this->faker->name(),
            'model' => $this->faker->name(),
            'production_year' => $this->faker->randomDigit(),
            'mileage' => $this->faker->randomDigit(),
            'fuel_type' => $this->faker->word(),
            'transmission' => $this->faker->word(),
            'type' => $this->faker->word()
        ];
    }
}
