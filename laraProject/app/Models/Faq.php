<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $table='faqs';
    protected $primaryKey = 'id';

    public static function getFaqs(){
        $faqs = Faq::all();
        return $faqs;
    }
}
