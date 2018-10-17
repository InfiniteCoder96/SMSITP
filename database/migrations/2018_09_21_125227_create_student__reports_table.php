<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student__reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('SID');
            $table->string('student_name');
            $table->string('gender');
            $table->string('grade');
            $table->integer('mobile');
            $table->string('vehicleNo');
            $table->string('type');
            $table->string('driver_name');
            $table->integer('dr_mobile');
            $table->string('route_name');
            $table->string('stop_name');

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
        Schema::dropIfExists('student__reports');
    }
}
