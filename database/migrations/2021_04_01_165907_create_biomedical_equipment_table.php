<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiomedicalEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biomedical_equipment', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->boolean('maintenance_plan')->default(false);
            $table->unsignedBigInteger('risk_factor_id')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->string('image')->default('images/default/no-image.png');
            $table->timestamps();

            //Foregn Keys
            $table->foreign('risk_factor_id')->references('id')->on('risk_factors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('biomedical_equipment_categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biomedical_equipment');
    }
}
