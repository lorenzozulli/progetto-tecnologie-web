function getCouponCount(offerId) {
    $.ajax({
      url: '/lista-offerte/' + offerId,     // Assumi che ci sia una rotta in Laravel che gestisca questa richiesta
      type: 'GET',
      success: function(response) {
        // response conterrà il numero di coupon emessi per l'offerta specificata
        console.log('Numero di coupon emessi:', response);
        $('#coupon_counter').text("Totale coupon emessi per questa offerta: "+response);
      },
    });
  }