<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Participants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('participants', function (Blueprint $table) {
            $table->increments('idn');
            $table->string('names');
            $table->string('email');
            $table->string('city')->nullable();  
            
            $table->string('ocupation')->nullable();
            $table->string('howknow')->nullable();
            $table->string('overnight')->nullable(); 

            $table->string('havepc')->nullable();
            $table->string('levelstudies')->nullable();
            $table->string('technologies')->nullable(); 
            $table->string('projectinmind')->nullable();
            $table->string('questions')->nullable();

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
        Schema::dropIfExists('participants');
    }
}
