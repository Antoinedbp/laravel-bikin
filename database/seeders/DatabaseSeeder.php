<?php

namespace Database\Seeders;

use App\Models\DeuxiemeSection;
use App\Models\Footer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
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
        ]);
    }
}
