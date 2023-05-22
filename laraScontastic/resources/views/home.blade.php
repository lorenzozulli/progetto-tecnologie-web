@extends('layouts/base')
@section('content')
      <div class="mega_container">
        <!-- banner section start -->
        <div class="banner_bg">
         <div class="frame">
            <h1>INIZIA ORA <br>LO SHOPPING</h1>
            <div class="bt"><a href="{{ route ('elenco-offerte') }}">Compra adesso</a></div>
         </div>
         </div>
         <!-- banner section end -->
      <!-- banner bg main end -->

        <!-- Aziende carousel section start -->
         <div class="carousel">
            <div class="item_wrapper">
               <div class="carousel__item">
                  <a href="#" target="blank">
                     <img class="img" src="images/mock.png">
                     <h3 class="title">Test 1</h3>
                  </a>
               </div>

               <div class="carousel__item">
                  <a href="#" target="blank">
                     <img class="img" src="images/mock.png">
                     <h3>Test 2</h3>
                  </a>
               </div>

               <div class="carousel__item">
                  <a href="#" target="blank">
                     <img class="img" src="images/mock.png">
                     <h3>Test 3</h3>
                  </a>
               </div>
            </div>
            <div class="item_wrapper">
               <div class="carousel__item">
                  <a href="#" target="blank">
                     <img class="img" src="images/mock.png">
                     <h3>Test 4</h3>
                  </a>
               </div>

               <div class="carousel__item">
                  <a href="#" target="blank">
                     <img class="img" src="images/mock.png">
                     <h3>Test 5</h3>
                  </a>
               </div>

               <div class="carousel__item">
                  <a href="#" target="blank">
                     <img class="img" src="images/mock.png">
                     <h3>Test 6</h3>
                  </a>
               </div>
            </div>
            <div class="item_wrapper">
               <div class="carousel__item">
                  <a href="#" target="blank">
                     <img class="img" src="images/mock.png">
                     <h3>Test 7</h3>
                  </a>
               </div>

               <div class="carousel__item">
                  <a href="#" target="blank">
                     <img class="img" src="images/mock.png">
                     <h3>Test 8</h3>
                  </a>
               </div>

               <div class="carousel__item">
                  <a href="#" target="blank">
                     <img class="img" src="images/mock.png">
                     <h3>Test 9</h3>
                  </a>
               </div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
         </div>
         <div class ="button_wrapper" style="text-align:center">
            <span class="carousel__button" onclick="currentSlide(1)"></span>
            <span class="carousel__button" onclick="currentSlide(2)"></span>
            <span class="carousel__button" onclick="currentSlide(3)"></span>
         </div>

         <script src="js/carousel.js"></script>

         <div class="bt"><a href="{{ route('lista-aziende') }}">Tutte le aziende</a></div>
      <!-- aziende carousel section end -->

        <!-- codes explanation section start -->
        <div class="codes_explanation">
               <h1 class="title">Cosa sono i codici?</h1>
               <p>Nell'ambito dell'e-commerce, i codici sconto sono ormai una realtà consolidata in grado di offrire concreti benefici sia ai venditori che agli acquirenti.
                  Da un lato, infatti, tali strumenti costituiscono un eccellente veicolo promozionale per tutte le aziende che vogliono incrementare e fidelizzare i propri clienti. Dall'altro, sono i clienti stessi a beneficiare di vantaggi esclusivi di vario genere, che possono concretizzarsi in un semplice sconto in denaro, oppure nell'invio di un omaggio o nella decurtazione delle spese di spedizione.
                  Tali codici possono essere pubblici, cioè utilizzabili da chiunque indistintamente, oppure personali o destinati a una ristretta platea di clienti. 
                  Esistono, inoltre, varie tipologie e categorie di coupon, che condividono un concetto di base (il risparmio), ma lo garantiscono in forme e modalità differenti. 
                  Per questa ragione abbiamo pensato di proporti una breve panoramica sui codici sconto e sulle loro innumerevoli varianti, in modo che tu possa sfruttarne a pieno i vantaggi e incrementare così il tuo potere d'acquisto.<br></p>
                  <h3>Le varie tipologie di codice sconto</h3>
                  <p>I coupon erogati dai negozi online possono prevedere condizioni diverse e differenti modalità di utilizzo a seconda del tipo di promozione per cui vengono predisposti. 
                     Grazie ai codici sconto puoi infatti avere molteplici benefici, non soltanto economici, ma anche pratici. 
                     Per sfruttarli al meglio, tuttavia, è necessario conoscerne le differenze e capire come o quando applicarli in modo da ottenere il massimo risparmio. 
                     Di seguito andremo quindi ad analizzare le tipologie di coupon più diffuse, cosicché tu possa avere una panoramica completa delle opzioni a tua disposizione.<br></p>
                  <h3>Codici sconto in percentuale</h3>
                  <p>Sono, senza dubbio, i coupon più comuni e conosciuti: si tratta infatti di una semplice riduzione di prezzo in percentuale sul costo originario dell'articolo.
                     Normalmente, si applicano sul prezzo o sulla tariffa di listino, ma in casi eccezionali potrebbero essere utilizzabili anche sugli articoli in saldo. 
                     Alcuni negozi, durante la procedura di acquisto, indicano inoltre l'importo in denaro corrispondente allo sconto applicato, in modo da offrirti un immediato riscontro del risparmio ottenuto mediante il coupon.<br></p>
                  <h3>Coupon spedizione gratuita</h3>
                  <p>Questo codice ti permette di eliminare le spese di spedizione dai tuoi acquisti online. 
                     Di solito è prevista una soglia di spesa minima che, in relazione all'importo dell'ordine, può renderne più o meno conveniente l'utilizzo. 
                     Se le soglie di spesa sono basse, infatti, la sua convenienza incrementa notevolmente, poiché ti consente di risparmiare le spese di spedizione anche sui piccoli acquisti. 
                     In caso di ordini più consistenti, invece, utilizzare uno di questi codici potrebbe essere addirittura superfluo, poiché molti negozi prevedono già delle soglie di spesa minima oltre le quali non occorre pagare la spedizione. 
                     In tal caso, dunque, meglio puntare su altre tipologie di codici sconto.<br></p>
                  <h3>Coupon con sconto fisso</h3>
                  <p>I coupon con sconto fisso sono altrettanto diffusi, ma a differenza di quelli in percentuale, ti consentono di risparmiare soltanto l'importo specificato. 
                     Di frequente, questo genere di promozione è legata a una soglia di spesa minima che può essere notevolmente superiore all'importo del buono sconto. 
                     Pertanto, ti consigliamo di valutarne l'effettiva convenienza in relazione all'importo totale dell'ordine che intendi effettuare. 
                     In linea di massima, sui piccoli importi questo coupon è quasi sempre più conveniente del codice sconto in percentuale, che, a sua volta, può garantirti un risparmio maggiore sugli acquisti più costosi.<br></p>
                  <h3>Codice sconto omaggio</h3>
                  <p>Con questo codice puoi ottenere l'invio di un omaggio a corredo dei tuoi acquisti. 
                     In genere si tratta di piccoli gadget o campioncini gratuiti, ma in molti casi potresti anche ottenere degli omaggi ben più sostanziosi. 
                     Pensa, ad esempio, alle classiche promozioni "3x2", grazie alle quali puoi ricevere un prodotto gratis (in formato standard) semplicemente inserendo il codice sconto abbinato all'offerta durante la procedura d'acquisto. 
                     Tali coupon, inoltre, possono rivelarsi davvero vantaggiosi quando effettui degli ordini cumulativi, che, a seconda delle condizioni d'utilizzo del buono, potrebbero consentirti di ricevere più di un prodotto omaggio con una singola transazione. 
                     In ogni caso, prima di usare un coupon omaggio ti consigliamo di leggere attentamente il regolamento della promozione, in modo da essere certo della sua effettiva convenienza rispetto ai classici codici sconto in percentuale o ad importo fisso.<br></p>
                  <h3>Codici sconto prevendita</h3>
                  <p>Sono generalmente proposti in occasione del lancio di nuovi prodotti, in particolare nel settore della tecnologia e dell'informatica. 
                     Di solito, vengono offerti dai produttori (attraverso i propri canali di vendita) o dai grandi negozi online incaricati come rivenditori ufficiali dalle stesse aziende produttrici. 
                     Nello specifico, tali coupon non sono poi molto diversi da quelli fissi o in percentuale, ma a differenza di quest'ultimi, determinano il costo finale dell'articolo e non lo sconto applicato. 
                     Dunque, puoi utilizzarli per acquistare dei prodotti in prevendita a prezzi decisamente inferiori rispetto a quelli di listino, che verranno poi fissati al momento del lancio sul mercato. 
                     Data la loro estrema convenienza, questi codici vengono tuttavia proposti in quantità limitata o resi disponibili per un periodo di tempo molto breve, anche solo per poche ore. 
                     Si tratta, quindi, di una variante piuttosto rara, che in alcuni casi può però garantirti un risparmio maggiore rispetto ad altre tipologie di codici sconto.<br></p>
        </div>
        <!-- codes explanation section end -->
      </div>
@endsection