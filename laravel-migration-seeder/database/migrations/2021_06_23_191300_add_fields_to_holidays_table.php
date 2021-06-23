<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('holidays', function (Blueprint $table) {
            $table->char('name', 100)->comment('Package name');
            $table->string('description', 255);
            $table->char('modality', 100)->comment('All inclusive etc');
            $table->integer('price');
            $table->string('country');
            $table->smallInteger('cod_manager');
            $table->integer('length');
            $table->char('transport', 100)->comment('Airplane, boat, train, bus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('holidays', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('description');
            $table->dropColumn('modality');
            $table->dropColumn('price');
            $table->dropColumn('country');
            $table->dropColumn('cod_manager');
            $table->dropColumn('length');
            $table->dropColumn('transport');
        });
    }
}
