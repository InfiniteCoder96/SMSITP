<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {

            $table->string('salutation');
            $table->string('first_Name');
            $table->string('middle_Name');
            $table->string('last_Name');
            $table->date('DoB');
            $table->string('NIC');
            $table->string('Gender');
            $table->string('Address');
            $table->string('Email_Address');
            $table->integer('Telephone_No_Mob');
            $table->integer('Telephone_No_Res');
            $table->string('birth_certificate_no');
            $table->string('religion');
            $table->string('race');
            $table->string('country');
            $table->string('nationality');
            $table->string('blood_group');
            $table->text('Known_Illnesses');
            $table->text('Known_Allergies');

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
        Schema::dropIfExists('students');
    }
}
