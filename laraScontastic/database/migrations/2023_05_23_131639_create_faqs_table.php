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
        Schema::create('faqs', function (Blueprint $table) {
             // Primary key auto-incrementale della tabella.
             $table->bigIncrements('id');

             //$table->string('usernameCreatore', 30)->unsigned();
             $table->string('domanda', 200)->unique();
             $table->string('risposta', 200)->unique();
 
             // definizione del vincolo di FK
             //$table->foreign('usernameCreatore')->references('username')->on('users');
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
