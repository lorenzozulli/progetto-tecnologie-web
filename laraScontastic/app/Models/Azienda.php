<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Azienda extends Model{
    protected $table = 'azienda';

    public function getAzienda(){
        $azienda = Azienda::all();
        return $azienda;
    }
}