<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tputiposusuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tputiposusuarios', function (Blueprint $table) {
            $table->increments('tpuid');
            $table->unsignedInteger('estid')->default(1);
            $table->string('tpunombre');
            $table->string('tpuprivilegio')->nullable();
            $table->timestamps();

            $table->foreign('estid')->references('estid')->on('estestados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tputiposusuarios');
    }
}
