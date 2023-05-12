<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableCamion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camion', function (Blueprint $table) {
            $table->id('idCamion');
            $table->unsignedBigInteger('idProprio');
            $table->foreign('idProprio')->references('idProprio')->on('proprietaires');
            $table->string('typeCamion');
            $table->text('caractéristiqueCamion');
            $table->string('numImmatriculation')->unique();
            $table->unsignedInteger('capaciteDeCharge');
            $table->string('photoCamion');
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
