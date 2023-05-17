<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Offerta extends  Model {

    /*queste due variabili rappresentano rispettivamente la tabella 'offerta' nel database
    e la chiave primaria della tabella, 'offerId' in questo caso 
    */
    protected $table = 'offerta';
    protected $primaryKey = 'offerId';

    //questa funzione restituisce la descrizione dell'offerta
    public function getDescription(){
        //descrizione è definita nel db
        $descrizione =$this->descrizione;

        return $descrizione;
    }

    
}