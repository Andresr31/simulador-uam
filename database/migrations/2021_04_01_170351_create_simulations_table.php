<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simulations', function (Blueprint $table) {
            $table->id();

            $table->time('time');
            $table->integer('numberAttempts');
            
            $table->timestamps();

            //Foregn Keys
            $table->unsignedBigInteger('enviroment_id');
            $table->foreign('enviroment_id')->references('id')->on('hospital_rooms');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('report_id');
            $table->foreign('report_id')->references('id')->on('reports');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('simulations');
    }
}
