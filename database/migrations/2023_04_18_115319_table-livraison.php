<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableLivraison extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livraisons', function (Blueprint $table) {
            $table->id('idLivraison');
            $table->unsignedBigInteger('idDemande');
            $table->foreign('idDemande')->references('idDemande')->on('demandes');
            $table->unsignedBigInteger('idConducteur');
            $table->foreign('idConducteur')->references('idConducteur')->on('conducteurs');
            $table->date('dateDepart');
            $table->time('heureDepart');
            $table->date('dateArrivee');
            $table->time('heureArrivee');
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
