

  var availableTags = [];
  $.ajax({
    method: "GET",
    url: "/lista-aziendeajax",
    success: (response)=>{
      
        startAutoComplete1(response);
    }
  });
  function startAutoComplete1(availableTags){
    $( "#search_company" ).autocomplete({
      source: availableTags
    });
  }

  $(document).ready(function() {
    $.ajax({
        url: '/coupon-emessi',
        type: 'GET',
        success: function(response) {
            var couponEmessi = response.coupon_emessi;
            console.log(response)
            $('#n_coupon').text("Totale coupon emessi:"+ response);
        },
    });
});
