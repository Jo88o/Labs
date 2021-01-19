<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_s')->insert([
            [
                'titre1' => 'GET IN THE LAB AND SEE THE (SERVICES)',
                'icon' =>'flaticon-023-flask',
                'titre2' => 'GET IN THE LAB',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => "BROWSE",

            ],
            [
                'titre1' => null,
                'icon' =>'flaticon-011-compass',
                'titre2' => 'Projects online',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'titre1' => null,
                'icon' =>'flaticon-037-idea',
                'titre2' => 'SMART MARKETING',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'titre1' => null,
                'icon' =>'flaticon-039-vector',
                'titre2' => 'Social Media',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'titre1' => null,
                'icon' =>'flaticon-036-brainstorming',
                'titre2' => 'Brainstorming',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'titre1' => null,
                'icon' =>'flaticon-026-search',
                'titre2' => 'Documented',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'titre1' => null,
                'icon' =>'flaticon-018-laptop-1',
                'titre2' => 'Responsive',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'titre1' => null,
                'icon' =>'flaticon-043-sketch',
                'titre2' => 'Retina ready',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'titre1' => null,
                'icon' =>'flaticon-012-cube',
                'titre2' => 'Ultra modern',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ]
        ]
    );
    }
}
