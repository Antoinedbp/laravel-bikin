<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                "logo" => "bx bxl-dribbble",
                "titre" => "Lorem Ipsum",
                "description" => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi"
            ],
            [
                "logo" => "bx bx-file",
                "titre" => "Sed ut perspiciatis",
                "description" => "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore"
            ],
            [
                "logo" => "bx bx-tachometer",
                "titre" => "Magni Dolores",
                "description" => "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia"
            ],
            [
                "logo" => "bx bx-layer",
                "titre" => "Lorem Ipsum",
                "description" => "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis"
            ],
            [
                "logo" => "bx bx-dribble",
                "titre" => "Nemo Enim",
                "description" => "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore"
            ],
            [
                "logo" => "bx bx-file",
                "titre" => "Lorem Ipsum",
                "description" => "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia"
            ],
            [
                "logo" => "bx bx-tachometer",
                "titre" => "Nemo Enim",
                "description" => "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis"
            ],
        ]);
    }
}
