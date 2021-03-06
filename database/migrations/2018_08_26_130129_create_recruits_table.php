<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tid');
            $table->string('name');
            $table->string('nic');
            $table->string('address');
            $table->string('dob');
            $table->string('email');
            $table->string('gender');
            $table->string('status');
            $table->string('category');
            $table->string('contact_number');
            $table->string('documents');
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
        Schema::dropIfExists('recruits');
    }
}
