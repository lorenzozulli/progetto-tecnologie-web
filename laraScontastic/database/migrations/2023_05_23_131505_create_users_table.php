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
        Schema::create('users', function (Blueprint $table) {
            $table->string('username', 30)->primary();

            $table->string('nome', 20);
            $table->string('cognome', 20);
            $table->integer('eta')->nullable();
            $table->string('genere', 1)->nullable();

            $table->integer('livello');
            $table->string('password', 255);

            $table->string('telefono', 10)->nullable();
            $table->string('email', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
