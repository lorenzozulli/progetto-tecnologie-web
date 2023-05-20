<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Offerta extends  Model {

    /*queste due variabili rappresentano rispettivamente la tabella 'offerta' nel database
    e la chiave primaria della tabella, 'offerId' in questo caso 
    */
    protected $table = 'offerta';
    protected $primaryKey = 'offerId';

    //questo metodo serve a prendere tutti gli attributi della tabella Offerta
    //che verranno richiamati successivamente nel controller 
   public function getOffer(){
        $offerta = Offerta::all();

        return $offerta;

   }



    
}