<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisapprovedPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disapproved_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('AdmissionNo');
            $table->string('Amount');
            $table->string('Bank');
            $table->date('DepositedDate');
            $table->string('Remark');
            $table->string('Status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disapproved_payments');
    }
}
