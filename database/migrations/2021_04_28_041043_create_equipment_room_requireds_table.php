<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentRoomRequiredsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_room_requireds', function (Blueprint $table) {
            $table->id();
            
            $table->enum('required',['TRUE','FALSE','OPTIONAL']);
            //Foregn Keys
            $table->unsignedBigInteger('enviroment_id');
            $table->foreign('enviroment_id')->references('id')->on('hospital_rooms');

            $table->unsignedBigInteger('equipment_id');
            $table->foreign('equipment_id')->references('id')->on('biomedical_equipment');

            $table->string('feedback')->nullable();
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
        Schema::dropIfExists('equipment_room_requireds');
    }
}
