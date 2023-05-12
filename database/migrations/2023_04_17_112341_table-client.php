<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableClient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id('idClient');
            $table->string('nomClient');
            $table->string('prenomClient');
            $table->string('emailClient')->unique();
            $table->string('motDePasseClient');
            $table->string('numtelClient');
            $table->string('numtelClient2')->nullable();
            ;
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
