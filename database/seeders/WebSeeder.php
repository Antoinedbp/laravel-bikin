<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebSeeder extends Seeder
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
            "image"=>"portfolio-3.jpg"],
            ["nom"=>"app",
            "image"=>"portfolio-6.jpg"],
            ["nom"=>"app",
            "image"=>"portfolio-9.jpg"],
        ]);
    }
}
