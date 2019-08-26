// Select de paises
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


window.onload = function(){
  var provincia = document.getElementById('state')
  provincia.style.display = "none";

  var selectProv = document.querySelector('#prov');

  fetch('https://dev.digitalhouse.com/api/getProvincias')
    .then(function(respuesta){
      return respuesta.json();
    })
    .then(function(provincias){

      for (var i = 0; i < provincias.data.length; i++) {
        console.log("Provincia: "+provincias.data[i].state);

        var nuevaProv = document.createElement('option');
        nuevaProv.setAttribute('value', provincias.data[i].state);
        nuevaProv.innerText = provincias.data[i].state;
        selectProv.append(nuevaProv);
      }
    })
    .catch(function(error){
      console.log(error)
    })

    document.getElementById("state").addEventListener("change", myFunction);

    function myFunction(){
      var provincia = document.getElementById('state')
      provincia.style.display = "block";
      console.log("hola");
    }

    document.querySelector("#country").onchange = function () {
    if (this[this.selectedIndex].value === "Argentina") {
      var provincia = document.getElementById('state')
      provincia.style.display = "block";
        // document.querySelector("#second").className = "show";
    } else {
      var provincia = document.getElementById('state')
      provincia.style.display = "none";
        // document.querySelector("#second").className = "";
    }
};

}
