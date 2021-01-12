<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeLSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_l_s', function (Blueprint $table) {
            $table->id();
            $table->string('lien1'); 
            $table->string('lien2');
            $table->string('lien3');
            $table->string('lien4');
            $table->string('src');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_l_s');
    }
}
