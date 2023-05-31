<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users') -> insert([
            [
                'username' => 'mrossi1',
                'nome' => 'Mario',
                'cognome' => 'Rossi',
                'eta' => 54,
                'genere' => 'M',
                'livello' => 1,
                'password' => Hash::make('root'),
                'telefono' => 1234567891,
                'email' => 'mario@rossi.com',
            ],
            [
                'username' => 'marco99',
                'nome' => 'Marco',
                'cognome' => 'Alessandrini',
                'eta' => 98,
                'genere' => 'M',
                'livello' => 2,
                'password' => Hash::make("ciao"),
                'telefono' => 7832891231,
                'email' => 'marcoaless99@gmail.com'
            ],
            [
                'username' => 'maremmoide',
                'nome' => 'Maicol',
                'cognome' => 'Lanni',
                'eta' => 22,
                'genere' => 'M',
                'livello' => 3,
                'password' => Hash::make("maremmoide"),
                'telefono' => 1234567890,
                'email' => 'maremmoide@gmail.com'
            ]
        ]);
/*
        // Creazione tabella Aziende.
        DB::table('companies') -> insert([
            [
                'id' => 1,
                //'managerUsername' => 'root',
                'descrizione' => 'Servizio online di food delivery, supportato da più di 2500 ristoranti in tutta Italia',
                'nome' => 'Just Eat',
                'ragioneSociale' => 'Just Eat',
                'tipologia' => 'Cibo e Ristorazione',
                'logo' => NULL
                
            ],
            [
                'id' => 2,
                //'managerUsername' => 'root',
                'descrizione' => "É una società cinese impegnata nello sviluppo, produzione e commercializzazione di
                                 prodotti, di sistemi e di soluzioni di rete e telecomunicazioni, smartphones ed
                                 elettronica di consumo generale.",
                'nome' => 'Huawei',
                'ragioneSociale' => 'Huawei Tecnologies Corporation, Limited',
                'tipologia' => 'Informatica',
                'logo' => NULL

            ],
            [
                'id' => 3,
                //'managerUsername' => 'root',
                'descrizione' => "Società che sfrutta i bambini per fare le scarpe migliori al mondo (circa)
                                il loro nome deriva da una dea Greca della \"vittoria\"",
                'nome' => 'Nike',
                'ragioneSociale' => 'Nike, Inc.',
                'tipologia' => 'Abbigliamento',
                'logo' => NULL

            ],
            [
                'id' => 4,
                //'managerUsername' => 'root',
                'descrizione' => "É una società cinese impegnata nello sviluppo, produzione e commercializzazione di
                                 prodotti, di sistemi e di soluzioni di rete e telecomunicazioni, smartphones ed
                                 elettronica di consumo generale.",
                'nome' => 'Xiaomi',
                'ragioneSociale' => 'XIAOMI TECHNOLOGY ITALY S.R.L.',
                'tipologia' => 'Informatica',
                'logo' => NULL

            ]
        ]);

        // Creazione tabella Offerte
        DB::table('offers') -> insert([
            [
                'id' => 1,
                'id_azienda' => 1,
                'nome' => '30% di sconto per 2 ordini',
                'oggetto' => 'Ottieni il 30% di sconto sul totale dei prossimi 2 ordini - Solo da Just Eat!',
                'modalitaFruizione' => "Inserire il codice del coupon nella sezione Inserisci sconto al momento dell'ordine sull'app.",
                'luogoFruizione' => "Utilizzabile solo sull'app Just Eat.",
                'dataOraCreazione' => now(),
                'dataOraScadenza' => '2024-01-01 10:15:00',
                //'immagine' => NULL
            ],
            [
                'id' => 2,
                'id_azienda' => 2,
                'nome' => 'Huawei P60 a prezzo stracciato!',
                'oggetto' => 'Ottieni il nuovo Huawei P60 scontato del 35%!',
                'modalitaFruizione' => 'Mostrare il codice generato dal coupon alla cassa al momento del pagamento.',
                'luogoFruizione' => 'Presso negozi e punti vendita certificati Huawei.',
                'dataOraCreazione' => now(),
                'dataOraScadenza' => '2024-01-01 10:15:00',
                //'immagine' => NULL
            ]
        ]);
        
        // Creazione tabella FAQs.
        DB::table('faqs') -> insert([
            [
                'id' => 1,
                //'usernameCreatore' => 'root',
                'domanda' => 'domanda1',
                'risposta' => 'risposta1'
            ],
            [
                'id' => 2,
                //'usernameCreatore' => 'root',
                'domanda' => 'domanda2',
                'risposta' => 'risposta2'
            ]
        ]);
    }*/
    }
}