# progetto-tecnologie-web
Repository per il progetto di Tecnologie web di:
* Maicol Lanni
* Mario Maio
* Lorenzo Marrone
* Lorenzo Zulli

# Overview del Progetto
(Quando ci sono i ... sono cose che possiamo implementare facoltativamente, ma quelle specificate vanno ovviamente implementate per forza)

### Obiettivo:

Obiettivo del progetto è la realizzazione di un sito web per la pubblicizzazione di offerte promozionali (sconti,
tre-per-due, ...) di prodotti e servizi e per l’emissione dei relativi coupon.
Il sito è gestito da una società che crea una vetrina per le aziende (produttrici di beni e/o di servizi) le quali
possono pubblicare le loro offerte riservate agli utenti registrati al sito. Questi ultimi possono visualizzare
(anche come risultato di una ricerca) le offerte di interesse ed acquisire un coupon che abilita all’acquisto della
promozione presso i negozi/centri delle aziende. Il sito non implementa alcuna attività di e-commerce.
Specifiche
L’applicazione Web da realizzare permetterà:
1. la visualizzazione di informazioni generali sul sito e sui servizi offerti: modalità di accesso, funzionalità
implementate, informazioni sulle aziende (nome, localizzazione, logo, ...), FAQ,...;
2. la registrazione al sito degli utenti (cioè coloro che avranno accesso alle offerte promozionali), che
dovranno indicare i loro dati anagrafici (nome, cognome, genere, età, ...), i riferimenti per eventuali
contatti (e-mail, telefono) e l’account scelto (username e password).
3. la visualizzazione delle offerte promozionali, organizzate per azienda;
4. la descrizione dettagliata delle offerte (oggetto dell’offerta, modalità, tempi e luoghi di fruizione, ...)
5. l’acquisizione da parte dell’utente registrato, una volta selezionata l’offerta di interesse, di un coupon da presentare al punto vendita dell’offerente per usufruire della promozione;
6. la gestione (inserimento, modifica, cancellazione) delle promozioni pubblicizzate;
7. la gestione (inserimento, modifica, cancellazione) delle aziende (cioè dei soggetti che offrono le
promozioni), con tutte le informazioni ad esse associate (ragione sociale, tipologia, logo aziendale,
descrizione dell’azienda, localizzazione, ...);
8. la gestione (inserimento, modifica, cancellazione) dei membri dello staff della società che gestisce il sito e delle FAQ.

<hr>

Ad un maggior livello di dettaglio, si tenga anche conto delle seguenti specifiche funzionali:
- si dia a tutti gli utenti la possibilità di effettuare la ricerca sulle offerte, specificando l’azienda e/o uno o
più termini che compaiono nella descrizione dell’offerta. Il risultato sia un elenco delle offerte
individuate, tra le quali l’utente registrato possa selezionare quella di cui vuole usufruire per acquisire
il relativo coupon;
- si dia la possibilità, a ciascun utente, di acquisire un solo coupon per ciascuna promozione;
- il coupon sia generato come una pagina Web (che l’utente provvederà poi a stampare, ma non dobbiamo implementare noi, se la fa lui la print della pagina) che contiene la descrizione del prodotto offerto, l’identità dell’utente per cui è stato emesso, le modalità di fruizione ed un codice univoco diverso per ciascun coupon;
- come username di ciascun utente registrato, si utilizzi una stringa e non un indirizzo e-mail (MUST HAVE);

<hr>

Relativamente all’accesso all’applicazione, si definisca una policy diversificata articolata nei seguenti livelli:
- **Livello 0:** area pubblica, cioè disponibile con le informazioni fornite a tutti coloro che accedono al sito (quindi, anche agli utenti definiti nei livelli successivi). A questo livello si associ:
  - la visualizzazione delle informazioni generali sul sito, sulle aziende che offrono promozioni e la procedura di registrazione degli utenti;
  - la visualizzazione delle offerte promozionali e la relativa funzionalità di ricerca, senza la possibilità di emissione dei coupon.

- **Livello 1:** area riservata agli utenti registrati al sito, i quali possono:
  - modificare tutti i propri dati personali, inclusa la password di accesso;
  - acquisire coupon per le promozioni.

- **Livello 2:** area riservata ai membri dello staff, che possono:
  - modificare il proprio profilo (nome e cognome) e la password di accesso (non può modificare lo username in quanto usato come chiave di ogni persona accedente al sito);
  - gestire (creare/modificare/cancellare) le promozioni.

- **Livello 3:** (LO CREIAMO INSIEME AL SITO E DEVE ESSERE UNICO, deve avere i parametri di default che noi inseriamo nel sito stesso) area ad accesso esclusivo dell’amministratore del sito che consenta:
  - la gestione (creazione/modifica/cancellazione) delle aziende (i soggetti che offrono le promozioni);
  - la cancellazione degli utenti registrati (livello 1)
  - la gestione (creazione/modifica/cancellazione) dei membri dello staff;
  - la generazione delle statistiche sull’attività del sito:
    - numero totale di coupon emessi;
    - selezionando una promozione (sia attiva che scaduta), il numero di coupon emessi per essa;
    - selezionando un cliente, il numero di coupon emessi a suo nome.
    - l’aggiornamento delle FAQ.

<hr>

### Funzionalità opzionali

(L’implementazione delle funzionalità descritte nel seguito non è obbligatoria, ma se realizzata, determina un incremento fino ad un massimo totale di 3 punti del punteggio associato alla valutazione del progetto (solo se, al netto del contributo delle funzionalità opzionali, questo è ≥ 18)):

-  **ripartizione gestione aziende tra i membri dello staff.** Si implementi una funzionalità, in capo all’amministratore, di assegnazione a ciascun componente dello staff delle aziende (una o più) delle quali può gestire le promozioni (nella versione base del sito tutti i membri dello staff possono gestire tutte le aziende, con questa implementazione ogni membro dello staff può modificare solo le aziende dettate dall'admin);
- **gestione di promozioni abbinate.** Si implementi una funzionalità che consenta allo staff di inserire promozioni abbinate, che accorpano, cioè, due o più promozioni. In questo caso l’utente registrato che sceglie questa offerta riceve un coupon che gli consente di acquisire tutti i prodotti/servizi delle singole promozioni con uno sconto ulteriore, definito come percentuale di sconto sulla somma degli importi delle singole promozioni. Sia dato all’amministratore il compito di definire il membro (unico) dello staff che deve gestire le promozioni abbinate, il quale sarà anche in grado di gestire le promozioni singole di tutte le aziende.

# Obiettivi didattici del Progetto

Il progetto ha l’obiettivo di far apprendere allo studente le modalità di:

- Uso del linguaggio **HTML** per la realizzazione delle pagine Web
- Uso dei **CSS** per la definizione delle modalità di visualizzazione dei contenuti delle pagine Web
- Uso di **JavaScript** per la gestione di eventi e visualizzazione dinamica di contenuti lato Client
- Uso di **jQuery** a supporto del codice JavaScript
- Uso del framework **Laravel** (Ver. 9) per la realizzazione di applicazioni Web

Organizzazione della Documentazione (Al termine del progetto dovrà essere redatta una documentazione (5/10 pagine massimo) descrittiva del lavoro svolto contenente le seguenti informazioni):

- **Riferimenti:** identificativo del gruppo e suoi componenti.
- **Contributo:** contributo al progetto di ciascun membro del gruppo, espresso in percentuale
- **Descrizione del sito:** descrizione sintetica del sito e delle sue funzionalità.
- **Organization chart:** schema di link del sito (mappa).
- **Soluzioni adottate:** illustrazione delle soluzioni tecnologicamente più interessanti adottate da porre all’attenzione del docente per la valutazione (segnaliamo qualche funzione carina).

# FAQ
- **Scadenza del progetto?** 10 giorni prima dell'appello di Giugno.
- **Come avviene la valutazione effettiva?** c'è una tabella che ha il prof, sta sul pdf.
- **Quali sono i programmi da scaricare?** Li trovi nel pdf "Strumenti software" 