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
        // Tabella utenti
        DB::table('users') -> insert([
            [
                'username' => 'useruser',
                'nome' => 'Mario',
                'cognome' => 'Rossi',
                'eta' => 33,
                'genere' => 'M',
                'livello' => 1,
                'password' => Hash::make('6nKphd5o'),
                'telefono' => 3511943720,
                'email' => 'mariorossi33@gmail.com',
            ],
            [
                'username' => 'staffstaff',
                'nome' => 'Maria',
                'cognome' => 'Alessandrini',
                'eta' => 49,
                'genere' => 'F',
                'livello' => 2,
                'password' => Hash::make("6nKphd5o"),
                'telefono' => 3644627260,
                'email' => 'mariaaless49@gmail.com',
            ],
            [
                'username' => 'adminadmin',
                'nome' => NULL,
                'cognome' => NULL,
                'eta' => NULL,
                'genere' => 'O',
                'livello' => 3,
                'password' => Hash::make("6nKphd5o"),
                'telefono' => NULL,
                'email' => 'NULL'
            ]
        ]);

        // Tabella aziende
        DB::table('companies') -> insert([
            [
                'id' => 1,
                'descrizione' => 'Just Eat è un servizio in rete di ordinazione e consegna pasti. Agisce come intermediario
                                  tra il ristoratore e i clienti. Ha sede a Londra, in Inghilterra e opera in 13 paesi in Europa, 
                                  Asia, Oceania e nelle Americhe. Fondata in Danimarca, ed in seguito trasferita in Inghilterra, la
                                  piattaforma consente ai clienti di cercare ristoranti locali da asporto, effettuare ordini e pagare 
                                  in rete e di scegliere tra le opzioni di ritiro o consegna.',
                'nome' => 'Just Eat',
                'ragioneSociale' => 'JUST-EAT ITALY S.R.L.',
                'tipologia' => 'Cibo e Ristorazione',
                'logo' => '/images/loghi-aziende/just_eat.png',
                
            ],
            [
                'id' => 2,
                'descrizione' => "Huawei è una società cinese impegnata nello sviluppo, produzione e commercializzazione di
                                 prodotti, di sistemi e di soluzioni di rete e telecomunicazioni, smartphones ed
                                 elettronica di consumo generale.",
                'nome' => 'Huawei',
                'ragioneSociale' => 'Huawei Tecnologies Corporation, Limited',
                'tipologia' => 'Informatica',
                'logo' => '/images/loghi-aziende/huawei.png'

            ],
            [
                'id' => 3,
                'descrizione' => "Nike, Inc. è una multinazionale statunitense che produce calzature, abbigliamento e accessori sportivi. 
                                    Creata nel 1971, ha sede a Beaverton, nell'area metropolitana di Portland, Oregon. Il nome dell'azienda è 
                                    ispirato alla dea greca della vittoria Nike, una dea alata in grado di muoversi ad alta velocità,
                                    la cui rappresentazione più famosa, una scultura esposta al Museo del Louvre, è la Nike di Samotracia. Il marchio ha un logo 
                                    semplice e rapidamente riconoscibile: il cosiddetto Swoosh, una virgola capovolta e orizzontale. Esso è stato creato da Carolyn 
                                    Davidson nel 1971 come rappresentazione stilizzata dell'ala della dea. La società è il più grande fornitore di attrezzature sportive al mondo.",
                'nome' => 'Nike',
                'ragioneSociale' => 'Nike, Inc.',
                'tipologia' => 'Abbigliamento',
                'logo' => '/images/loghi-aziende/nike.png'

            ],
            [
                'id' => 4,
                'descrizione' => 'La Xiaomi Corporation, formalmente registrata come Xiaomi Inc. comunemente nota come Xiaomi è un impresa multinazionale cinese
                                 che opera nel campo dell\'elettronica di consumo, fondata in Cina nel 2010 da Lei Jun e con sede a Pechino. Xiaomi produce cellulari
                                 , apps, portatili, dispositivi per la casa, elettronica di consumo e altri prodotti di uso quotidiano.',
                'nome' => 'Xiaomi',
                'ragioneSociale' => 'Xiaomi Inc.',
                'tipologia' => 'Informatica',
                'logo' => 'images/loghi-aziende/xiaomi.png'

            ],
            [
                'id' => 5,
                'descrizione' => ' La Asus è un\'azienda con sede a Taipei, Taiwan che produce schede madri, schede video, lettori ottici, palmari, portatili, telefonini,
                                    smartphone, computer, accessori per il networking come modem/router e accessori per computer.',
                'nome' => 'Asus',
                'ragioneSociale' => 'ASUSTeK Computer Inc.',
                'tipologia' => 'Informatica',
                'logo' => 'images/loghi-aziende/asus.png'

            ],
            [
                'id' => 6,
                'descrizione' => 'Prozis è una potente società di sviluppo di prodotti. Ogni giorno realizziamo nuovi prodotti. Questo è possibile solo perché abbiamo
                                 sviluppato la nostra tecnologia proprietaria che garantisce di offrirti prodotti di alta qualità, belli e a prezzi equi. Perseveriamo nella 
                                 nostra filosofia di un processo verticale 4.0, producendo nelle nostre strutture o con l\'aiuto dei nostri super partner. Facciamo tutto: idea,
                                concept, design, produzione, controllo qualità, marketing, vendite, logistica, stampa, distribuzione, assistenza clienti, sviluppo software, foto,
                                video, 3D e filosofia. Consegniamo ovunque tu sia, quando vuoi. Non scendiamo a compromessi. Respiriamo tecnologia, beviamo design e ci nutriamo della
                                nostra volontà di superare noi stessi realizzando i migliori prodotti al mondo. Tutto inizia nel 2007 con un pazzo in un garage che pensa di poter cambiare
                                 il mondo in meglio. In questo momento, siamo centinaia, andiamo da migliaia di persone pazze ma concentrate. La volontà è un\'abilità. C\'è un sacco di gente
                                che vuole comprarci. Non abbiamo un cartellino del prezzo. Non si tratta di soldi. Riguarda la nostra missione. Fidati di noi. Nutriremo il tuo corpo 
                                e la tua mente con tutto ciò di cui hai bisogno per superare te stesso. miguel milhao
                2019',
                'nome' => 'Prozis',
                'ragioneSociale' => 'Prozis.com, S.A.',
                'tipologia' => 'Nutrizione sportiva',
                'logo' => 'images/loghi-aziende/xiaomi.png'

            ],
            [
                'id' => 7,
                'descrizione' => 'IKEA è un\'azienda multinazionale svedese fondata da Ingvar Kamprad con sede legale principale a Leida[3][4], nei Paesi Bassi, specializzata nella vendita di mobili,
                                 complementi d\'arredo e altra oggettistica per la casa. Nel febbraio 2023, era presente con 460 centri di vendita in 62 paesi, gran parte dei quali in Europa, dove 
                                 realizza il 70% del suo fatturato. Gli altri centri di vendita si trovano negli Stati Uniti d\'America, Brasile, Canada, Asia, Emirati Arabi Uniti, Australia e Marocco.',
                'nome' => 'IKEA',
                'ragioneSociale' => 'Inter IKEA Systems B.V.',
                'tipologia' => 'Mobili',
                'logo' => 'images/loghi-aziende/ikea.png'

            ],
            [
                'id' => 8,
                'descrizione' => 'Intel Corporation è un\'azienda multinazionale statunitense fondata il 18 luglio 1968 con sede a Santa Clara (California).
                                    Produce dispositivi a semiconduttore, microprocessori, componenti di rete, chipset per motherboard (scheda madre), chip per 
                                    schede video e molti altri circuiti integrati.',
                'nome' => 'Intel',
                'ragioneSociale' => 'Intel Corporation.',
                'tipologia' => 'Informatica',
                'logo' => 'images/loghi-aziende/intel.png'

            ],
            [
                'id' => 9,
                'descrizione' => 'Epic Games, nota in passato come Potomac Computer Systems, è un\'azienda statunitense dedita allo sviluppo di motore grafico Unreal 
                                Engine e videogiochi con sede nella città di Cary (North Carolina), fondata nel 1990 da Tim Sweeney; è principalmente conosciuta per aver
                                 realizzato la serie di Unreal, Gears of War e Fortnite.',
                'nome' => 'Epic Games',
                'ragioneSociale' => 'Epic Games, Inc.',
                'tipologia' => 'Informatica',
                'logo' => 'images/loghi-aziende/epic_games.jpg'

            ],
            [
                'id' => 10,
                'descrizione' => 'Adidas (reso graficamente come adidas) è un\'impresa multinazionale tedesca con sede a Herzogenaurach (stessa città che ospita la sede principale della Puma,
                                 azienda con la quale condivide l\'origine). Adidas produce calzature, abbigliamento e altri articoli sportivi, per attività professionale, dilettantistica o per
                                  il tempo libero. È il maggiore produttore di abbigliamento sportivo in Europa e il secondo a livello mondiale.I prodotti dell\'azienda sono tutti identificati 
                                  dalle caratteristiche tre strisce parallele e disposte in modo obliquo, che possono ricordare una forma della lettera sampi del greco antico. Tale identificazione
                                compare anche nel logo ufficiale dell\'azienda.',
                'nome' => 'Adidas',
                'ragioneSociale' => 'Adidas Italy S.P.A.',
                'tipologia' => 'Abbigliamento',
                'logo' => 'images/loghi-aziende/adidas.jpg'

            ],
            [
                'id' => 11,
                'descrizione' => 'Amazon.com, Inc. è un\'azienda di commercio elettronico statunitense, con sede a Seattle nello stato di Washington. È la più grande Internet company al mondo.
                                 Time ha proclamato Jeff Bezos, fondatore dell\'azienda, Uomo dell\'anno nel 1999, a riconoscimento del successo di Amazon nel rendere popolare il commercio elettronico.',
                'nome' => 'Amazon',
                'ragioneSociale' => 'Amazon.com, Inc.',
                'tipologia' => 'Informatica',
                'logo' => 'images/loghi-aziende/amazon.png'

            ],
            [
                'id' => 12,
                'descrizione' => 'Microsoft Corporation (in precedenza Micro-Soft Company, comunemente Microsoft) è un\'azienda multinazionale statunitense d\'informatica con sede a Redmond nello Stato di
                                 Washington (Stati Uniti). Creata da Bill Gates e Paul Allen il 4 aprile 1975, cambiò nome il 25 giugno 1981, per poi assumere nuovamente nel 1983 l\'attuale denominazione.
                                Microsoft è una delle più importanti al mondo nel settore, nonché una delle più grandi produttrici di software al mondo per fatturato, e anche una delle più grandi aziende per 
                                capitalizzazione azionaria, circa 2288 miliardi di dollari nel 2022; attualmente sviluppa, produce, supporta e vende, o concede in licenza, computer software, elettronica di consumo,
                                 personal computer e servizi; i suoi prodotti software più noti sono la linea di sistemi operativi Microsoft Windows, la suite di produttività personale Microsoft Office e i browser 
                                 Internet Explorer e Edge; in ambito hardware invece i suoi prodotti più conosciuti sono la famiglia di console Xbox e i prodotti Microsoft Surface. ',
                'nome' => 'Microsoft',
                'ragioneSociale' => 'Microsoft Corporation',
                'tipologia' => 'Informatica',
                'logo' => 'images/loghi-aziende/microsoft.png'

            ],
            [
                'id' => 13,
                'descrizione' => 'La Van Doren Rubber Company, meglio conosciuta come Vans, è una fabbrica di scarpe da skate statunitense fondata il 16 marzo 1966 da Paul Van Doren, 
                                    Gordon C. Lee, James Van Doren e Serge D\'Elia. A partire dal 2012 ha iniziato a produrre anche altri capi d\'abbigliamento sempre nel campo dello skateboard.',
                'nome' => 'Vans',
                'ragioneSociale' => 'VF INTERNATIONAL S.A.G.L.',
                'tipologia' => 'Abbigliamento',
                'logo' => 'images/loghi-aziende/vans.png'

            ],
        ]);

        // Tabella Offerte
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
        
        // Tabella FAQs.
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
    }
    }
}