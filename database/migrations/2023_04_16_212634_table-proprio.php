<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableProprio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PROPRIETAIRES', function (Blueprint $table) {
            $table->id('idProprio');
            $table->string('nomProprio');
            $table->string('prenomProprio');
            $table->string('emailProprio')->unique();
            $table->string('motDePasseProprio');
            $table->string('numtelProprio');
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
