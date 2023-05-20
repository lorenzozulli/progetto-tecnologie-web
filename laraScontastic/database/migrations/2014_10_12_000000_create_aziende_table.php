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
        Schema::create('aziende', function (Blueprint $table) {
            //chiave primaria
            $table->bigIncrements('id_azienda')->primary();

            //altri attributi
            $table->string('ragione_sociale', 45);
            $table->string('nome', 45);
            $table->string('categoria', 45);
            $table->string('website', 45);
            $table->string('descrizione', 45);


            //Non so se dobbiamo aggiungere qualche chiave esterna che fa riferimento ad utenti
        });


        DB::statement("ALTER TABLE aziende ADD logo LONGBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aziende');
    }
};
