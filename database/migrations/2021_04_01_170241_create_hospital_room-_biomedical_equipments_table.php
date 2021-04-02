<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalRoomBiomedicalEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_room-_biomedical_equipments', function (Blueprint $table) {
            $table->id();
            $table->string('feedback');
            $table->boolean('required');
            $table->timestamps();

            //Foregn Keys
            $table->unsignedBigInteger('enviroment_id');
            $table->foreign('enviroment_id')->references('id')->on('hospital_rooms');

            $table->unsignedBigInteger('equipment_id');
            $table->foreign('equipment_id')->references('id')->on('biomedical_equipment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital_room-_biomedical_equipments');
    }
}
