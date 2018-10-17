<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassTeacherSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_teacher_s', function (Blueprint $table) {
            $table->increments('id');
            $table->String('ClassID');
            $table->String('ClassName');
            $table->String('ClassTeacherID');
            $table->String('ClassTeacherName');
            $table->String('Subject');
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
        Schema::dropIfExists('class_teacher_s');
    }
}
