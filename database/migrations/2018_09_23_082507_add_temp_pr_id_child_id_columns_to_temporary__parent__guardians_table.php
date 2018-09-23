<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTempPrIdChildIdColumnsToTemporaryParentGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('temporary__parent__guardians', function (Blueprint $table) {
            $table->string('temp_prId');
            $table->dropPrimary('child_id');
            $table->primary('temp_prId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('temporary__parent__guardians', function (Blueprint $table) {
            //
        });
    }
}
