

 
 var availableTags = [];
 $.ajax({
   method: "GET",
   url: offerteAjax,
   success: (response)=>{
       console.log(response)
       startAutoComplete(response);
   }
 });
 function startAutoComplete(availableTags){
   $( "#search_offer" ).autocomplete({
  
     source: availableTags
   });
 }
 
 var availableTags = [];   //viene creata la variabile e inizializzata come array vuoto
  $.ajax({    //apre la chiamata AJAX 
    method: "GET",
    url: aziendeAjax,       //viene effettuata una chiamata HTTP di tipo GET, all'url specificato
    success: (response)=>{            //il parametro response rappresenta i dati ottenuti da AJAX, se la chiamata avviene con successo 
      
        startAutoComplete1(response);     //viene chiamato la funzione startAutoComplete1
    }
  });
  function startAutoComplete1(availableTags){   //questa funzione prende come parametro l'array vuoto generato 
    $( "#search_company" ).autocomplete({     //popola l'elemento html con l'id "search_company" tramite la funzione autocomplete 
      source: availableTags                   //utilizza come fonte dati availableTags, popolato con gli elementi della response
    });
  }

  $(document).ready(function() {            //quando la pagina è completamente caricata, parte la function
    $.ajax({
        url: couponEmessi,
        type: 'GET',
        success: function(response) {
           console.log(response)
            //popola l'elemento html con l'id n_coupon con la response
            $('#n_coupon').text("Totale coupon emessi: "+ response);
        },
    });
});
