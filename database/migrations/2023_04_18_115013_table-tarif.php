<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableTarif extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarif', function (Blueprint $table) {
            $table->id('idTarif');
            $table->unsignedBigInteger('poidsMin');
            $table->unsignedBigInteger('poidsMax');
            $table->unsignedBigInteger('distanceMin');
            $table->unsignedBigInteger('distanceMax');
            $table->unsignedBigInteger('prix');
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
        //
    }
}
