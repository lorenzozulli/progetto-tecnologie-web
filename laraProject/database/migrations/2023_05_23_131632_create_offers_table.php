<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('id_azienda')->unsigned();    // foreign key -> punta a Aziende(id)
            $table->string('nome');
            $table->text('oggetto');

            $table->text('modalitaFruizione');
            $table->text('luogoFruizione');

            // inserisco come data di default la data corrente, nel caso questo valore non dovesse essere riempito
            $table->dateTime('dataOraCreazione')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('dataOraScadenza')->default(DB::raw('CURRENT_TIMESTAMP'));

            // definizione dei vincoli della FK
           
            $table->foreign('id_azienda')->references('id')->on('companies')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
};
