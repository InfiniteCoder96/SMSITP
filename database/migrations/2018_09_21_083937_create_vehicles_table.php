<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('regNo');
            $table->string('regOwner');
            $table->string('address');
            $table->integer('Mfg');
            $table->integer('chassisNo');
            $table->integer('seating_Capacity');
            $table->integer('wheelBase');
            $table->string('Regn_Authority');
            $table->integer('Regn_date');
            $table->integer('regn_Valid');
            $table->integer('fuel');
            $table->string('type_Of_Body');
            $table->integer('vehicle_Class');
            $table->integer('engineNo');
            $table->integer('tax');
            $table->string('colour');
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
        Schema::dropIfExists('vehicles');
    }
}
