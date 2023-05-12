<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableDemandes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id('idDemande');
            $table->unsignedBigInteger('idClient');
            $table->foreign('idClient')->references('idClient')->on('client');
            $table->unsignedBigInteger('idCamion');
            $table->foreign('idCamion')->references('idCamion')->on('camion');
            $table->decimal('poidsMarchandise');
            $table->string('lieuEnlevement');
            $table->string('lieuExpedition');
            $table->date('dateEnlevement');
            $table->time('heureEnlevement');
            $table->string('typeMarchandise');
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
