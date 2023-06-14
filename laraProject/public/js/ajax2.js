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