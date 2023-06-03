var availableTags = [];
  $.ajax({
    method: "GET",
    url: "/lista-offerteajax",
    success: (response)=>{
      
        startAutoComplete(response);
    }
  });
  function startAutoComplete(availableTags){
    $( "#search_offer" ).autocomplete({
      source: availableTags
    });
  }

  var availableTags = [];
  $.ajax({
    method: "GET",
    url: "/lista-aziendeajax",
    success: (response)=>{
      
        startAutoComplete(response);
    }
  });
  function startAutoComplete(availableTags){
    $( "#search_company" ).autocomplete({
      source: availableTags
    });
  }
