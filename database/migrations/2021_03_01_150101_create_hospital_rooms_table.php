<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image')->default('images/default/no-image.png');
            $table->boolean('mesh');
            

            //Foregn Keys
            $table->unsignedBigInteger('floor_id');
            $table->foreign('floor_id')->references('id')->on('floors');

            $table->unsignedBigInteger('celling_id');
            $table->foreign('celling_id')->references('id')->on('cellings');

            $table->unsignedBigInteger('wall_id');
            $table->foreign('wall_id')->references('id')->on('walls');

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
        Schema::dropIfExists('hospital_rooms');
    }
}
