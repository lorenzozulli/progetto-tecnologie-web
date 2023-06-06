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

             //$table->string('username')->unsigned();
             $table->text('domanda')->unique();
             $table->text('risposta')->unique();
 
             // definizione del vincolo di FK
             //$table->foreign('username')->references('username')->on('users');
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
