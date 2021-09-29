<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbars')->insert([[
            'chemin'=>'Home'
        ],
        [
            'chemin'=>'About'
        ],
        [
            'chemin'=>'Services'
        ],
        [
            'chemin'=>'Portfolio'
        ],
        [
            'chemin'=>'Team'
        ],
        [
            'chemin'=>'Contact'
        ],
        ['chemin'=>'Get Started'
         ]]);
    }
}
