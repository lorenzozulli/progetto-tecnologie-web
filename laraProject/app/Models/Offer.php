<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $table='offers';
    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'nome',
        'oggetto',
        'modalitaFruizione',
        'luogoFruizione',
        'dataOraCreazione',
        'dataOraScadenza',
    ];
=======
    public $timestamps = false;
>>>>>>> 2be8f0acf0bcd406fb11ed47a4fd8a6762e359c5
}
