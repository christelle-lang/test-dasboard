<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CONDUCTEURS', function (Blueprint $table) {
            $table->id('idConducteur');
            $table->string('nomConducteur');
            $table->string('prenomConducteur');
            $table->string('emailConducteur')->unique();
            $table->string('motDePasseConducteur');
            $table->string('numtelConducteur');
            $table->string('numImmatriculation');
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
