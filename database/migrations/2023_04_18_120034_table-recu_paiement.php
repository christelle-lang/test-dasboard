<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableRecuPaiement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recuPaiements', function (Blueprint $table) {
            $table->id('idrecuPaiement');
            $table->unsignedBigInteger('idLivraison');
            $table->foreign('idLivraison')->references('idLivraison')->on('livraisons');
            $table->unsignedBigInteger('montant');
            $table->string('moyenPaiement');
            $table->date('datePaiement');
            $table->time('heurePaiement');
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
