<?php

namespace Database\Factories;

use App\Models\Titre;
use Illuminate\Database\Eloquent\Factories\Factory;

class TitreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Titre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [       
            "titre1"=>"Built Better Websites With Bikin",
            'description1'=>$this->faker->text(),
            "titre2"=>"Voluptatem dignissimos provident quasi",
            'description2'=>$this->faker->text(),
            "titre3"=>"Features",
            'description3'=>$this->faker->text(),
            "titre4"=>"Services",
            'description4'=>$this->faker->text(),
            "titre5"=>"Portfolio",
            'description5'=>$this->faker->text(),
            "titre6"=>"Testimonials",
            'description6'=>$this->faker->text(),
            "titre7"=>"Team",
            'description7'=>$this->faker->text(),
            "titre8"=>"Contact",
            'description8'=>$this->faker->text()
            
                          
        ];
    }
}
