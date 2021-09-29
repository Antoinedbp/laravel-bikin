<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { DB::table('footers')->insert([   
        'adresse'=>'A108 Adam StreetNew York, NY 535022United States',
        'phone'=>'+1 5589 55488 55',
        'email'=>'info@example.com',
        'linkTitre1'=>'Useful Links', 
        'link1'=>'Home', 
        'link2'=>'About us',
        'link3'=>'Services',
        'link4'=>'Terms of service',
        'link5'=>'Privacy policy',
        'linkTitre2'=>'Our Services', 
        'link6'=>'Web Design', 
        'link7'=>'Web Development',
        'link8'=>'Product Management',
        'link9'=>'Marketing',
        'link10'=>'Graphic Design',
        'titre'=>"Join Our Newsletter",
        'description'=>'Tamen quem nulla quae legam multos aute sint culpa legam noster magna']
        );
        
    }
}
