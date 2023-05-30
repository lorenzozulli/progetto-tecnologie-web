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
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');

            //$table->string('managerUsername', 30)->unsigned(); // foreign key -> punta a Utenti(username)
            $table->text('descrizione');
            $table->string('nome', 40)->unique();
            $table->string('ragioneSociale', 50)->unique();
            $table->string('tipologia', 30);
            $table->string('logo')->default('images/loghi-aziende/non_disponibile.png');

            // definizione del vincolo di FK
            //$table->foreign('managerUsername')->references('username')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
