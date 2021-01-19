<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_t_s')->insert(
        [
            [
                'temoignage' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, dolorem cupiditate dolorum amet omnis aspernatur rerum, maiores optio maxime sunt quaerat aliquid corporis consequuntur tempora delectus modi beatae, nam architecto.,',
                'src' => '01.jpg',
                'nom' => 'Michael',
                'prenom' => 'Smith',
                'fonction' => 'CEO Company',
            ],
            [
                'temoignage' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur blanditiis obcaecati illo corporis odio provident excepturi. Iste eveniet sunt quam, recusandae dicta ad quis, consectetur labore quas possimus commodi tempora.',
                'src' => '02.jpg',
                'nom' => 'Sarah',
                'prenom' => 'Claus',
                'fonction' => 'Direction Commerciale',
            ],
            [
                'temoignage' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur blanditiis obcaecati illo corporis odio provident excepturi. Iste eveniet sunt quam, recusandae dicta ad quis, consectetur labore quas possimus commodi tempora.,',
                'src' => '03.jpg',
                'nom' => 'Jordano',
                'prenom' => 'Cubeddu',
                'fonction' => 'Behman',
            ],
            [
                'temoignage' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur blanditiis obcaecati illo corporis odio provident excepturi. Iste eveniet sunt quam, recusandae dicta ad quis, consectetur labore quas possimus commodi tempora.,',
                'src' => '03.jpg',
                'nom' => 'Martin',
                'prenom' => 'M',
                'fonction' => 'Hndk',
            ],
            [
                'temoignage' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur blanditiis obcaecati illo corporis odio provident excepturi. Iste eveniet sunt quam, recusandae dicta ad quis, consectetur labore quas possimus commodi tempora.,',
                'src' => '03.jpg',
                'nom' => 'Cosmin',
                'prenom' => 'Patrau',
                'fonction' => 'Rlehman',
            ],
            [
                'temoignage' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur blanditiis obcaecati illo corporis odio provident excepturi. Iste eveniet sunt quam, recusandae dicta ad quis, consectetur labore quas possimus commodi tempora.,',
                'src' => '03.jpg',
                'nom' => 'Kevin',
                'prenom' => 'Gois',
                'fonction' => 'Mieukman',
            ],
        ]
        );
    }
}
