<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionalheadSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectionalhead_s', function (Blueprint $table) {
            $table->increments('id');
            $table->String('SectionID');
            $table->String('SectionName');
            $table->Integer('Grade');
            $table->String('SectionalHeadID');
            $table->String('SectionalHeadName');
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
        Schema::dropIfExists('sectionalhead_s');
    }
}
