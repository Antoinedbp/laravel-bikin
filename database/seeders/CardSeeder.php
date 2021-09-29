<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
            ["nom"=>"app",
            "image"=>"portfolio-2.jpg"],
            ["nom"=>"app",
            "image"=>"portfolio-5.jpg"],
            ["nom"=>"app",
            "image"=>"portfolio-8.jpg"],

        ]);
    }
}
