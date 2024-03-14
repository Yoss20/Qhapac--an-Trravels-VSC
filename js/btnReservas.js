document.addEventListener('DOMContentLoaded', function() {
    const btnReservaI = document.querySelectorAll('.btnReservaI');
    const btnReservaR = document.querySelectorAll('.btnReservaR');

    const VUELOREGRESO = document.querySelector('.boletoR');
    const VUELOSALIDA = document.querySelector('.boletoS');
    const formularioReserva = document.querySelector('.Reserva');

    const formularioDetalleBoleta = document.querySelector('.CostosVuel');
    const formularioTotal = document.querySelector('.Tot');
    
    const VuelDispoIDA = document.querySelector('.VuelDispoIDA');
    const VuelDispoIDAVUELTA = document.querySelector('.VuelDispoIDAVUELTA');



    btnReservaI.forEach((btn) => {
        btn.addEventListener('click', function(event) {
            // Accede a los elementos específicos de este botón haciendo referencia a "event.target"
            const vueloSeleccionado = event.target.getAttribute('data-idvueloI');
            // Resto de tu lógica para el botón de reserva I...

            VUELOSALIDA.style.display = 'block'; // No es necesario repetir estas líneas dos veces
        VUELOSALIDA.style.display = 'flex'; // Elimina esta línea

        formularioDetalleBoleta.style.display = 'block';
        formularioDetalleBoleta.style.display = 'flex'; // Elimina esta línea también


        });
    });

    btnReservaR.forEach((btn) => {
        btn.addEventListener('click', function(event) {
            // Accede a los elementos específicos de este botón haciendo referencia a "event.target"
            const vueloSeleccionado = event.target.getAttribute('data-idvueloR');
            // Resto de tu lógica para el botón de reserva R...
            VUELOREGRESO.style.display = 'block';
        VUELOREGRESO.style.display = 'flex';
        });
    });

 });




// function enviarDatosdeReserva() {
//     var datosPasajeros = obtenerValoresFormulario();
//     var formData = new FormData();
//     formData.append("cantidadPasajeros", document.getElementById("cantidadPasajerosHidden").value);
  
//     for (var i = 0; i < datosPasajeros.length; i++) {
//       formData.append("nombre" + i, datosPasajeros[i].nombre);
//       formData.append("apellido" + i, datosPasajeros[i].apellido);
//       formData.append("dni" + i, datosPasajeros[i].dni);
//   }   
  
  
//     var xhr = new XMLHttpRequest();
//     xhr.open("POST", "procesar_reserva.php");
//     xhr.send(formData);
//   }

//   function obtenerDatosdeVuelo() {
//     var numPasajeros = document.getElementById("cantidadPasajerosHidden").value;
//     var datosPasajeros = [];
//     for (var i = 0; i < numPasajeros; i++) {
//         var dni = document.getElementById("dni" + i).value;
//         var nombre = document.getElementById("nombre" + i).value;
//         var apellido = document.getElementById("apellido" + i).value;
//         datosPasajeros.push({
//             dni: dni,
//             nombre: nombre,
//             apellido: apellido
//         });
//     }
//     return datosPasajeros;
//   }