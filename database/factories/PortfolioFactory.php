<?php

namespace Database\Factories;

use App\Models\Photo;
use App\Models\Portfolio;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class PortfolioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Portfolio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    public function definition()
    {   
       
       
        $x =1;
        return [
            "image"=> "portfolio-".$x++.".jpg",
            "photo_id"=>$this->faker->numberBetween(1, count(Photo::all())),
            
        ];
        
    }
}
