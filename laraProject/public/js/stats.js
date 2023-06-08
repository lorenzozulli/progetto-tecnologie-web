function getCouponCount(offerta) {
    $.ajax({
      url: '/lista-offerte/' + offerta,     
      type: 'GET',
      success: function(response) {
        // response conterrà il numero di coupon emessi per l'offerta specificata
        console.log('Numero di coupon emessi:', response);
        $('#coupon_count').text("Totale coupon emessi per questa offerta: "+response);
      },
    });
  }