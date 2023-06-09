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
        Schema::create('coupons', function (Blueprint $table) {
            
            $table->bigIncrements('id')->unsigned();
            //FK
            $table->bigInteger('id_offerta')->unsigned(); 
            
            $table->string('codice')->unique();
            $table->string('user');
            
            
            $table->foreign('id_offerta')->references('id')->on('offers')
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
        Schema::dropIfExists('coupons');
    }
};
