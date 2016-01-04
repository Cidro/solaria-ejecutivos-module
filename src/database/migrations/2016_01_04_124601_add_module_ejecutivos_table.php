<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModuleGerentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_ejecutivos_clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rut', 256);
            $table->integer('ejecutivo_id')->nullable()->unsigned();
            $table->timestamps();

            $table->foreign('ejecutivo_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('module_ejecutivos_clientes');
    }
}
