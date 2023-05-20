<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Gli attributi hanno di default il vincolo NOT NULL
        Schema::create('utenti', function (Blueprint $table) {
            //chiave primaria
            $table->string('username', 45)->primary();

            //altri attributi
            $table->string('password', 45);
            $table->string('nome', 45);
            $table->string('cognome', 45);
            $table->string('e-mail', 45);
            $table->integer('età');
            $table->string('sesso', 1)->enum('M','F');//forse da toglierle la parte dell'enum
            $table->string('telefono', 10);
            $table->integer('livello')->enum('1','2','3');//forse da toglierle la parte dell'enum
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utenti');
    }
};
