$(document).ready(function() {
    $('#search-offer').on('input', function() {
        var query = $(this).val();

        if (query !== '') {
            $.ajax({
                url: '/search',  // Aggiorna con l'URL corretto della tua rotta di ricerca
                method: 'GET',
                data: { query: query },
                success: function(response) {
                    // Aggiorna la visualizzazione dei risultati di ricerca
                    var searchResults = $('#search-results');
                    searchResults.empty();  // Svuota i risultati precedenti

                    if (response.length > 0) {
                        // Crea la lista dei risultati
                        var resultList = $('<ul></ul>');
                        response.forEach(function(result) {
                            var listItem = $('<li>' + result.name + '</li>');
                            resultList.append(listItem);
                        });

                        // Aggiungi la lista dei risultati al div 'search-results'
                        searchResults.append(resultList);
                    } else {
                        // Nessun risultato trovato
                        searchResults.text('Nessun risultato trovato.');
                    }
                }
            });
        } else {
            // Se la barra di ricerca è vuota, svuota i risultati
            $('#search-results').empty();
        }
    });
});
