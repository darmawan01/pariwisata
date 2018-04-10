<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTouristsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tourists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('passport_id')->nullable();
            $table->string('name');
            $table->string('gender');
            $table->integer('age');
            $table->integer('country_id')->unsigned();
            $table->integer('nationality_id')->unsigned();
            $table->integer('destination_id')->unsigned();
            $table->integer('hotel_id')->unsigned();
            $table->timestamps();

            $table->foreign('country_id')->references('id')->on('countries')->onDelete('CASCADE');
            $table->foreign('nationality_id')->references('id')->on('nationalities')->onDelete('CASCADE');
            $table->foreign('destination_id')->references('id')->on('destinations')->onDelete('CASCADE');
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('tourists');
    }
}
