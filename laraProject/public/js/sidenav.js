/* Set the width of the side navigation to 500px */
function openNav() {
    document.getElementById("mySidenav").style.width = "500px";
  }
  
  /* Set the width of the side navigation to 0px */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

function removeDuplicates() {
    var links = document.getElementsByTagName('a') && document.getElementsByClassName('sidenav_item'); // Ottieni tutti gli elementi <a> e con la classe "sidenav_item"

    var uniqueContents = []; // Array per i contenuti unici dei tag
    var uniqueUrls = [];

    // Itera attraverso i link e controlla se il contenuto è già presente nell'array unico
    for (var i = 0; i < links.length; i++) {
        var content = links[i].innerText;
        if (uniqueContents.indexOf(content) === -1) { // Verifica se il contenuto è già presente nell'array unico
            uniqueContents.push(content); // Aggiungi il contenuto all'array unico se non è duplicato
        }

        var url = links[i].href;
        if (uniqueUrls.indexOf(url) === -1) { // Verifica se il contenuto è già presente nell'array unico
            uniqueUrls.push(url); // Aggiungi il contenuto all'array unico se non è duplicato
        }
    }

    var resultElement = document.getElementById('result');
            resultElement.innerHTML = ''; // Resetta il contenuto precedente
  
            for (var j = 0; j < uniqueContents.length; j++) { 
                var linkElement = document.createElement('a');

                linkElement.href = uniqueUrls[j];

                var linkText = document.createTextNode(uniqueContents[j]);
                linkElement.appendChild(linkText);

                resultElement.appendChild(linkElement);
            }
        }