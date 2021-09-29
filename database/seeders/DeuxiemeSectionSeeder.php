<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeuxiemeSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deuxieme_sections')->insert([
         
            ['chemin'=>'About us',
            'logo'=>'bx bx-receipt',
            'titre'=>'Corporis voluptates sit',
            'description'=>'Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip'],
            ['chemin'=>'About us',
            'logo'=>'bx bx-cube-alt',
            'titre'=>'Corporis voluptates sit',
            'description'=>'Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip'],
            ['chemin'=>'About us',
            'logo'=>'bx bx-images',
            'titre'=>'Corporis voluptates sit',
            'description'=>'Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip'],
            ['chemin'=>'About us',
            'logo'=>'bx bx-shield',
            'titre'=>'Corporis voluptates sit',
            'description'=>'Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip'],
        ]);
    }
}
