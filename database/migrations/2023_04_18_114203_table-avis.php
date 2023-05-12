<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableAvis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avis', function (Blueprint $table) {
            $table->id('idAvis');
            $table->unsignedBigInteger('idClient');
            $table->foreign('idClient')->references('idClient')->on('clients');
            $table->unsignedBigInteger('idConducteur');
            $table->foreign('idConducteur')->references('idConducteur')->on('conducteurs');
            $table->unsignedInteger('note');
            $table->string('commentaire');
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
