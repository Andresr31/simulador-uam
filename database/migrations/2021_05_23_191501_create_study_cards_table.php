<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_cards', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('summary');
            $table->text('content');
            $table->string('image')->default('images/default/no-image.png');
            $table->timestamps();

            //Foregn Keys
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('study_cards');
    }
}
