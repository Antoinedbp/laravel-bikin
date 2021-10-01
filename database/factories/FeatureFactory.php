<?php

namespace Database\Factories;

use App\Models\Feature;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeatureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Feature::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image'=>$this->faker->imageUrl(),
            'titre'=>$this->faker->sentence(),
            'sous_titre'=>$this->faker->paragraph(),
            'description1'=>$this->faker->sentence(),
            'description2'=>$this->faker->sentence(),
            'description3'=>$this->faker->sentence(),
        ];
    }
}
