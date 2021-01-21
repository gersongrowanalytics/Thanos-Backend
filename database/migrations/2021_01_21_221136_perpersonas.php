<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Perpersonas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpersonas', function (Blueprint $table) {
            $table->increments('perid');
            $table->unsignedInteger('estid')->default(1);
            $table->string('pernombrecompleto');
            $table->string('pernombre')->nullable();
            $table->string('perapellidopaterno')->nullable();
            $table->string('perapellidomaterno')->nullable();
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
        Schema::dropIfExists('perpersonas');
    }
}
