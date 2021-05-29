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

            $table->string('time'); // hh:mm:ss
            $table->integer('numberAttempts');
            $table->string('image')->nullable();

            //Foregn Keys
            $table->unsignedBigInteger('hopital_room_id');
            $table->foreign('hopital_room_id')->references('id')->on('hospital_rooms');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('report_id');
            $table->foreign('report_id')->references('id')->on('reports');

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
        Schema::dropIfExists('simulations');
    }
}
