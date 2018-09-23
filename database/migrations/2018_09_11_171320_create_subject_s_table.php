<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_s', function (Blueprint $table) {
            $table->increments('id');
            $table->String('SubjectID');
            $table->String('SubjectName');
            $table->String('Range');
            $table->String('SubjectTeacherID');
            $table->String('SubjectTeacherName');
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
        Schema::dropIfExists('subject_s');
    }
}
