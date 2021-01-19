<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeRSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_r_s')->insert(
            [
                'titre'=>'Are you ready to stand out?',
                'soustitre'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.',
                'button'=>'BROWSE',
               
            ],
        );
    }
}
