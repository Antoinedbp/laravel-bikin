<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'logo1'=>"bx bxl-dribbble",
            'titre1'=>$this->faker->word(),
            'description1'=>$this->faker->sentence(),
            'logo2'=>"bx bx-file",
            'titre2'=>$this->faker->word(),
            'description2'=>$this->faker->sentence(),
            'logo3'=>"bx bx-tachometer",
            'titre3'=>$this->faker->word(),
            'description3'=>$this->faker->sentence(),
            'logo4'=>"bx bx-layer",
            'titre4'=>$this->faker->word(),
            'description4'=>$this->faker->sentence()
        ];
    }
}
