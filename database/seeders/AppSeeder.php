<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apps')->insert([
            ["nom"=>"app",
            "image"=>"portfolio-1.jpg"],
            ["nom"=>"app",
            "image"=>"portfolio-4.jpg"],
            ["nom"=>"app",
            "image"=>"portfolio-7.jpg"],

        ]);
    }
}
