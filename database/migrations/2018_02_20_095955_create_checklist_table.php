<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChecklistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklist', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('passport')->nullable();
            $table->boolean('financing')->nullable();
            $table->boolean('insurance')->nullable();
            $table->boolean('pass')->nullable();
            $table->boolean('visaform')->nullable();
            $table->boolean('picture')->nullable();;
            $table->boolean('travelreservation')->nullable();;
            $table->boolean('hotelreservation')->nullable();;
            $table->boolean('employment')->nullable();;
            $table->boolean('travelinsurance')->nullable();;
            $table->boolean('financial_means')->nullable();;
            $table->boolean('passcopy')->nullable();;
            $table->boolean('consularfee')->nullable();;
            $table->integer('user_id')->unsigned();
            $table->integer('students_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('students_id')->references('id')->on('students')->onDelete('cascade');
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
        Schema::dropIfExists('checklist');
    }
}
