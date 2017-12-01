<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('rate');
            $table->float('timepractice');
            $table->string('lever');
            $table->text('descript');
            $table->integer('id_user')->unsigned();;
            $table->integer('id_program')->unsigned();;
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_program')->references('id')->on('programs');
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
        Schema::dropIfExists('actions');
    }
}
