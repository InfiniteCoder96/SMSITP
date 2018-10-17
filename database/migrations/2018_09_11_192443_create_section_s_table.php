<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_s', function (Blueprint $table) {
            $table->increments('id');
            $table->String('SectionID');
            $table->String('SectionName');
            $table->Integer('Grade');
            $table->Integer('NoOfClasses');
            $table->Integer('NoOfStudents');
            $table->String('SectionTeacherID');
            $table->String('SectionTeacherName');
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
        Schema::dropIfExists('section_s');
    }
}
