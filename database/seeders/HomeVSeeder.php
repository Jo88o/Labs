<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeVSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_v_s')->insert(
            [
                'src'=>'https://www.youtube.com/watch?v=JgHfx2v9zOU',
            ],
        );
    }
}
