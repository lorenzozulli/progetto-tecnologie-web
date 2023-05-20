<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Creazione tabella Utenti.
        DB::table('utenti') -> insert([
            [
                'username' => 'root',
                'password' => 'root',
                'nome' => 'Root',
                'cognome' => 'Groot',
                'e-mail' => 'root@admin',
                'età' => 'NULL',
                'sesso' => 'NULL',
                'telefono' => 'NULL',
                'livello' => '3',
            ],
            [
                'username' => 'Silvietto',
                'password' => 'miConscenta',
                'nome' => 'Silvio',
                'cognome' => 'Berlusconi',
                'e-mail' => 'silvio.berlusconi@gmail.com',
                'età' => '86',
                'sesso' => 'M',
                'telefono' => '1234567890',
                'livello' => '1',
            ]
        ]);

        //creazione tabella faqs.
        DB::table('faqs') -> insert([
            [
                'id_faq' => '1',
                'domanda' => 'Domanda1?',
                'risposta' => 'Risosta1!',
            ],
            [
                'id_faq' => '2',
                'domanda' => 'Domanda2?',
                'risposta' => 'Risosta2!',
            ]
        ]);

        //creazione tabella aziende.
        DB::table('aziende') -> insert([
            [
                'id_azienda' => 'NULL',
                'ragione_sociale' => 'Giast it',
                'nome' => 'Giast it',
                'categoria' => 'Cibo e Ristoranti',
                'website' => 'www.giastit.com',
                'descrizione' => 'Lorem ipsum...',
                'logo' => 'azienda_logo',
            ],
            [
                'id_azienda' => 'NULL',
                'ragione_sociale' => 'Arco Industrie',
                'nome' => 'Arco Industrie',
                'categoria' => 'Casa',
                'website' => 'www.arcoindustrie.it',
                'descrizione' => 'Lorem ipsum...',
                'logo' => 'azienda_logo',
            ]
            ]);

        //creazione tabella offerte.
        DB::table('offerte') -> insert([
            [
                'id_offerta' => 'NULL',
                'data_di-scadenza' => '2024-01-01',
                'tipologia' => 'Cibo',
                'descrizione' => 'Lorem ipsum...',
            ],
            [
                'id_offerta' => 'NULL',
                'data_di-scadenza' => '2025-01-01',
                'tipologia' => 'Casa',
                'descrizione' => 'Lorem ipsum...',
            ]
            ]);



    }
}
