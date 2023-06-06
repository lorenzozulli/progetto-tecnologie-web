// Codice JavaScript
$(document).ready(function() {
    $('#btnGetCouponCount').click(function(e) {
        e.preventDefault();

        var offerId = $('#offerId').val(); // Ottenere l'ID dell'offerta dal campo di input

        $.ajax({
            url: '/get-coupon-count', // URL della route in Laravel per ottenere il numero di coupon
            method: 'POST',
            data: {
                offer_id: offerId
            },
            success: function(response) {
                // Visualizza il numero di coupon emessi nella tua interfaccia utente
                $('#couponCount').text(response.count);
            },
            error: function(xhr) {
                // Gestisci l'errore
                console.log(xhr.responseText);
            }
        });
    });
});
