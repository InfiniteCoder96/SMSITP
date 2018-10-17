<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff__reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('EID');
            $table->string('name');
            $table->string('gender');
            $table->string('section');
            $table->integer('mobile');
            $table->string('vehicle_No');
            $table->string('type');
            $table->string('driver_name');
            $table->integer('dr_Mobile');
            $table->string('route_Name');
            $table->string('stop_Name');
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
        Schema::dropIfExists('staff__reports');
    }
}
