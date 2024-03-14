function agregarFormulariosPasajeros() {
  const cantidadPasajeros = parseInt(document.getElementById("cantidadPasajeros").value);
  const pasajerosContainer = document.getElementById("pasajerosContainer");
  document.getElementById("cantidadPasajerosHidden").value = cantidadPasajeros;
  // Limpiamos el contenedor antes de agregar los nuevos formularios

  for (let i = 0; i < cantidadPasajeros; i++) {
    const formularioPasajero = `
    <div class="infoPasajero">
    <form method="POST" action="../VistasPagina/procesar_formulario.php" id="formularioPasajero${i}">
      <input type="hidden" name="num" value="${cantidadPasajeros}">
        <fieldset class="lineFielS">
            <legend>Pasajero ${i+1} </legend>
                    <div class="field-holder">
                        <input class="inputP" type="text" id="nombre${i}" name="nombre${i}" required>
                        <label class="labelI" for="nombre${i}">Ingrese sus nombres</label>
                    </div>
                    <div class="field-holder">
                        <input class="inputP" type="text" id="apellido${i}" name="apellido${i}" required>
                        <label class="labelI" for="apellido${i}">Ingrese sus apellidos</label>
                    </div>
                    <div class="field-holder">
                        <input class="inputP" type="text" id="dni${i}" name="dni${i}" required maxlength="8">
                        <label class="labelI" for="dni${i}">Ingrese su DNI</label>
                    </div>
                </fieldset>
            </form>
            </div>
    `;
    pasajerosContainer.innerHTML += formularioPasajero;
    // pasajerosContainer.insertAdjacentHTML('beforeend', formularioPasajero);
  }
};

function agregarFormulariosPasajerosv() {
  const cantidadPasajeros = parseInt(document.getElementById("cantidadPasajeros").value);
  const pasajerosContainer = document.getElementById("pasajerosContainer");
  document.getElementById("cantidadPasajerosHidden").value = cantidadPasajeros;
  // Limpiamos el contenedor antes de agregar los nuevos formularios

  for (let i = 0; i < cantidadPasajeros; i++) {
    const formularioPasajero = `
    <div class="infoPasajero">
    <form method="POST" action="procesar_formulario.php" id="formularioPasajero${i}">
      <input type="hidden" name="num" value="${cantidadPasajeros}">
        <fieldset class="lineFielS">
            <legend>Pasajero ${i+1} </legend>
                    <div class="field-holder">
                        <input class="inputP" type="text" id="nombre${i}" name="nombre${i}" required>
                        <label class="labelI" for="nombre${i}">Ingrese sus nombres</label>
                    </div>
                    <div class="field-holder">
                        <input class="inputP" type="text" id="apellido${i}" name="apellido${i}" required>
                        <label class="labelI" for="apellido${i}">Ingrese sus apellidos</label>
                    </div>
                    <div class="field-holder">
                        <input class="inputP" type="text" id="dni${i}" name="dni${i}" required>
                        <label class="labelI" for="dni${i}">Ingrese su DNI</label>
                    </div>
                </fieldset>
            </form>
            </div>
    `;
    pasajerosContainer.innerHTML += formularioPasajero;
    // pasajerosContainer.insertAdjacentHTML('beforeend', formularioPasajero);
  }
};

function enviarDatosALaBaseDeDatosv() {
  var datosPasajeros = obtenerValoresFormulario();
  var formData = new FormData();
  formData.append("cantidadPasajeros", document.getElementById("cantidadPasajerosHidden").value);

  for (var i = 0; i < datosPasajeros.length; i++) {
    formData.append("nombre" + i, datosPasajeros[i].nombre);
    formData.append("apellido" + i, datosPasajeros[i].apellido);
    formData.append("dni" + i, datosPasajeros[i].dni);
}


  var xhr = new XMLHttpRequest();
  xhr.open("POST", "procesar_formulario.php");
  xhr.send(formData);
}

function obtenerValoresFormulario() {
  var numPasajeros = document.getElementById("cantidadPasajerosHidden").value;
  var datosPasajeros = [];
  for (var i = 0; i < numPasajeros; i++) {
      var dni = document.getElementById("dni" + i).value;
      var nombre = document.getElementById("nombre" + i).value;
      var apellido = document.getElementById("apellido" + i).value;
      datosPasajeros.push({
          dni: dni,
          nombre: nombre,
          apellido: apellido
      });
  }
  return datosPasajeros;
}

// Enviar los datos al servidor
function enviarDatosALaBaseDeDatos() {
  var datosPasajeros = obtenerValoresFormulario();
  var formData = new FormData();
  formData.append("cantidadPasajeros", document.getElementById("cantidadPasajerosHidden").value);

  for (var i = 0; i < datosPasajeros.length; i++) {
    formData.append("nombre" + i, datosPasajeros[i].nombre);
    formData.append("apellido" + i, datosPasajeros[i].apellido);
    formData.append("dni" + i, datosPasajeros[i].dni);
}


  var xhr = new XMLHttpRequest();
  xhr.open("POST", "../procesar_formulario.php");
  xhr.send(formData);
}