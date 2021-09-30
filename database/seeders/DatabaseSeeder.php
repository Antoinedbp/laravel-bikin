<?php

namespace Database\Seeders;

use App\Models\DeuxiemeSection;
use App\Models\Footer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Models\Titre::factory(1)->create();
        \App\Models\Feature::factory(4)->create();
        \App\Models\Testimonial::factory(7)->create();
        \App\Models\Team::factory(4)->create();
        \App\Models\Contact::factory(1)->create();
        \App\Models\Service::factory(1)->create();
        
        
        $this->call([
            DeuxiemeSectionSeeder::class,
            FooterSeeder::class,
            NavbarSeeder::class,
            PremiereSectionSeeder::class,
            PhotoSeeder::class,
            RoleSeeder::class,
        ]);
        \App\Models\User::factory(10)->create();
        \App\Models\Portfolio::factory(9)->create();
        DB::table('users')->insert([
            "name" => "Antoine",
            "email" => "antoinedebassompierre@hotmail.com",
            "password" => Hash::make('testtest'),
            "role_id" => 1,
            "created_at" => now()
        ]);
        DB::table('users')->insert([
            "name" => "Jean",
            "email" => "jeandeborsu@email.com",
            "password" => Hash::make('testtest'),
            "role_id" => 1,
            "created_at" => now()
        ]);
    }
}
