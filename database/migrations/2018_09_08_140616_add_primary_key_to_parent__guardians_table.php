<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPrimaryKeyToParentGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parent__guardians', function (Blueprint $table) {
            $table->primary('NIC_Passport');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parent__guardians', function (Blueprint $table) {
            //
        });
    }
}
