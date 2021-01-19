<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_teams')->insert(
            [
                [
                    'src' => '1.jpg',
                    'nom' => 'Christine',
                    'prenom' => 'Williams',
                    'fonction' => 'project manager',
                ],
                [
                    'src' => '2.jpg',
                    'nom' => 'Julia',
                    'prenom' => 'Londoria',
                    'fonction' => 'junior developer',

                ],
                [
                    'src' => '3.jpg',
                    'nom' => 'Greg',
                    'prenom' => 'Ford',
                    'fonction' => 'digital designer',
                ],
            ]
        );
    }
}
