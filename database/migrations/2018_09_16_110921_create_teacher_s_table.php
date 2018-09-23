<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_s', function (Blueprint $table) {
            $table->increments('id');
            $table->String('TeacherID');
            $table->String('TeacherName');
            $table->String('Email');
            $table->integer('ContactNo');
            $table->String('Qualifications');

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
        Schema::dropIfExists('teacher_s');
    }
}
