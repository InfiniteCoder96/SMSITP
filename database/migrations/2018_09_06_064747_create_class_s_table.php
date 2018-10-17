<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_s', function (Blueprint $table) {
            $table->increments('id');
            $table->String('ClassID');
            $table->String('ClassName');
            $table->Integer('NoOfStudents');
            $table->String('ClassTeacherID');
            $table->String('ClassTeacherName');
            $table->String('Venue');
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
        Schema::dropIfExists('class_s');
    }
}
