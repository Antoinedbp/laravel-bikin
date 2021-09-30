<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Testimonial::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description'=>$this->faker->sentence(),
            'photo'=>$this->faker->imageUrl($width = 90, $height = 90),
            'nom'=>$this->faker->name(),
            'statut'=>$this->faker->word()
        ];
    }
}
