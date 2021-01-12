<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_l_s')->insert(
            [
                'lien1'=>'Services',
                'lien2'=>'Blog',
                'lien3'=>'Contact',
                'lien4'=>'Elements',
                'src'=>'big-logo.png'
            ],
            [
                'src'=>'big-logo.png'
            ]
        );
    }
}
