<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_services')->insert(
            [
                [
                    'icon' => 'flaticon-023-flask',
                    'titre' => 'GET IN THE LAB',
                    'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',

                ],
                [
                    'icon' => 'flaticon-011-compass',
                    'titre' => 'Projects online',
                    'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',

                ],
                [

                    'icon' => 'flaticon-037-idea',
                    'titre' => 'SMART MARKETING',
                    'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',


                ],
                [

                    'icon' => 'flaticon-039-vector',
                    'titre' => 'Social Media',
                    'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',


                ],
                [

                    'icon' => 'flaticon-036-brainstorming',
                    'titre' => 'Brainstorming',
                    'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',


                ],
                [

                    'icon' => 'flaticon-026-search',
                    'titre' => 'Documented',
                    'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',


                ],
                [

                    'icon' => 'flaticon-018-laptop-1',
                    'titre' => 'Responsive',
                    'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',


                ],
                [

                    'icon' => 'flaticon-043-sketch',
                    'titre' => 'Retina ready',
                    'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',


                ],
                [

                    'icon' => 'flaticon-012-cube',
                    'titre' => 'Ultra modern',
                    'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',


                ]
            ]
        );
    }
}
