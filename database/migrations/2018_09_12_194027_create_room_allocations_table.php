<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomAllocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_allocations', function (Blueprint $table) {
            $table->increments('hostelNo');
            $table->string('hostelName');
            $table->string('roomNo');
            $table->integer('reg_no');
            $table->string('reg_type');
            $table->string('name');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('charge_per_month');
            $table->string('charge_per_session');


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
        Schema::dropIfExists('room_allocations');
    }
}
