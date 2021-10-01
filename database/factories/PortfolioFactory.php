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
    
    public function incrementer(){
        
        for($x = 0; $x<=9; $x++){
            $solution = $x;
        }
        $resolution = "portfolio-".$solution."jpg";
        return $resolution;
    }
    public function definition()
    {   
       
        return [
            "image"=> $this->incrementer() ,
            "photo_id"=>$this->faker->numberBetween(1, count(Photo::all())),
            
        ];
        
    }
}
