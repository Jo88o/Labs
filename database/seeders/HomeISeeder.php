<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeISeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_i_s')->insert(
            [
                'name'=>'Your name',
                'mail'=>'Your email', 
                'subject'=>'Subject', 
                'message'=>'Message', 
                'button'=>'SEND', 
                'titre1'=>'CONTACT US', 
                'texte'=>'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.', 
                'titre2'=>'Main Office', 
                'adresse'=>'C/ Libertad, 34
                05200 Arévalo', 
                'phone'=>'0034 37483 2445 322', 
                'email'=>'hello@company.com', 
            ],
        );
    }
}
