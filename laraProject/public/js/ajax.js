

  var availableTags = [];
  $.ajax({
    method: "GET",
    URL: "/lista-offerteajax",
    success: (response)=>{
        startAutoComplete(response);
    }
  });
  function startAutoComplete(availableTags){
    $( "#search_company" ).autocomplete({
      source: availableTags
    });
  }
