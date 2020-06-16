<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCagnoliniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cagnolini', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nome");
            $table->string("tipo");
            $table->integer("altezza");
            $table->integer("peso");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cagnolini');
    }
}
