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
        Schema::create('faqs', function (Blueprint $table) {
            //chiave primaria
            $table->bigIncrements('id_faq')->primary();

            //altri attributi
            $table->string('domanda', 100);
            $table->string('risposta', 1000);


            //Non so se dobbiamo aggiungere qualche chiave esterna che fa riferimento ad utenti
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faqs');
    }
};
