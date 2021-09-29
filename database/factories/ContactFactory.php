<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'logo1'=>'bx bx-map',
            'logo2'=>'bx bx-envelope',
            'logo3'=>'bx bx-phone-call',
            'adresse'=>$this->faker->address(),
            'phone'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->email()
        ];
    }
}
