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

// Validacion del formulario de registro - NO FUNCIONA BIEN

// Primero capturamos los campos
var campoNombre =document.querySelector('input[name=name]');
var campoUsername =document.querySelector('input[name=username]');
var campoEmail = document.querySelector('input[name=email]');
var elFormulario = document.querySelector('.theForm');


// // Validamos los campos
campoNombre.onblur = function(){
  if(this.value == ''){
    alert("El campo nombre no puede quedar vacio");
  }
}

// NO FUNCIONA LA VALIDACION DE LENGHT
campoUsername.onblur = function(){
  if(this.value == ''){
    alert("El campo usuario no puede quedar vacio");
  } else if (this.value.lenght < 5){
    alert("El nombre de usuario debe tener al menos 5 caracteres");
  }
}
//
// // Expresion regular para verificar que tenga el formato de email
// NO ESTA FUNCIONANDO!!
var emailRegex = "[A-Z0-9a-z._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,64}";

campoEmail.onblur = function(){
  if(this.value == ''){
    alert("El campo email no puede quedar vacio");
  } else if(!emailRegex.test(this.value)){
    alert("El mail debe tener un formato valido");
  }
}
//
// // Corroboramos que el formulario no se envie si estos campos no estan bien completados
elFormulario.onsubmit = function(event){
  if(this.value == ''){
    alert("El campo nombre es obligatorio");
    event.preventDefault();
  }
}
