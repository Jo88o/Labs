<?php

namespace Database\Seeders;

use App\Models\ServiceSP;
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
        $this->call([
            HomeLSeeder::class,
            HomePSeeder::class, 
            HomeSSeeder::class, 
            HomeVSeeder::class, 
            HomeTSeeder::class,
            HomeServiceSeeder::class,
            HomeTeamSeeder::class,
            HomeRSeeder::class,  
            HomeISeeder::class, 
            CarousselSeeder::class,
            TitreSeeder::class,
            ServiceSPSeeder::class,
            ContactSeeder::class, 
        ]);
    }
}
