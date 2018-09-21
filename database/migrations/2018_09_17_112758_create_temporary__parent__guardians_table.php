<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemporaryParentGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporary__parent__guardians', function (Blueprint $table) {
            $table->string('child_id');
            $table->string('role');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('NIC_Passport');
            $table->string('nationality');
            $table->string('race');
            $table->string('religion');
            $table->string('working_sector');
            $table->string('profession');
            $table->string('occupation');
            $table->string('work_place');
            $table->string('email');
            $table->string('work_address');
            $table->integer('work_telephone');
            $table->integer('telephone_mob');


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
        Schema::dropIfExists('temporary__parent__guardians');
    }
}
