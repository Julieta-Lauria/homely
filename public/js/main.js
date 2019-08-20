
var selectPaises = document.querySelector('#country');

fetch('https://restcountries.eu/rest/v2/all')
  .then(function(respuesta){
    return respuesta.json();
  })
  .then(function(paises){
    for (var i = 0; i < paises.length; i++) {
      var nuevoPais = document.createElement('option');
      nuevoPais.setAttribute('value', paises[i].name);
      nuevoPais.innerText = paises[i].name;
      selectPaises.append(nuevoPais);
    }
  })
  .catch(function(error){
    console.log(error)
  })
