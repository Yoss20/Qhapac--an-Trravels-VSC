document.addEventListener('DOMContentLoaded', function() {
    const botonesReserva = document.querySelectorAll('.btnReservaI');
  
    botonesReserva.forEach((boton) => {
      boton.addEventListener('click', function(event) {
        const idVuelo = boton.getAttribute('data-idvueloI');
  
        // Aquí puedes hacer una solicitud AJAX para enviar el idVuelo al servidor y almacenarlo en la base de datos
        // Ejemplo con Fetch API:
        fetch('guardar_reserva.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({ idVuelo: idVuelo })
        })
        .then(response => response.json())
        .then(data => {
          // Manejar la respuesta del servidor si es necesario
          console.log(data);
        })
        .catch(error => {
          console.error('Error:', error);
        });
      });
    });
  });

//   console.log({
//     IDvuelo: IDvuelo,
//     cantidadPasajeros: cantidadPasajeros,
//     precTotalI: precTotalI
// });

  
 
 
 
//  $(document).ready(function() {
//      $(document).on('click', '.btnReservaI', function() {
//          var IDvuelo = $(this).data('IDvuelo');
//          var cantidadPasajeros = $('cantidadPersonas').val(); // Asegúrate de tener el campo con el id "cantidadPasajeros" para recoger este dato
//          var precioTotal = $('precTotalI').val(); // Asegúrate de tener el campo con el id "precTotal" para recoger este dato

//          $.ajax({
//              type: 'POST',
//              url: 'controlaVuelosIV.php',
//              data: {
//                  IDvuelo: IDvuelo,
//                  cantidadPasajeros: cantidadPasajeros,
//                  precioTotal: precioTotal
//              },
//              success: function(response) {
//                  alert(response); // Muestra la respuesta del servidor
//                  // Aquí puedes realizar acciones adicionales si la inserción fue exitosa
//              },
//              error: function(xhr, status, error) {
//                  alert('Hubo un error al realizar la reserva');
//                  // Aquí puedes manejar el error si la inserción falla
//              }
//          });
//      });
//  });



// function enviarDatosdeReserva() {
//     $(document).on('click', '.btnReservaI', function() {
//         var IDvuelo = $(this).data('IDvuelo');
//         var subtotal = $('subtotal').val(); // Asegúrate de tener el campo con el id "cantidadPasajeros" para recoger este dato
//         var descuento = $('descuento').val(); // Asegúrate de tener el campo con el id "precTotal" para recoger este dato
//         var imp = $('imp').val();
//         var total = $('total').val();



//         $.ajax({
//             type: 'POST',
//             url: 'procesar_reserva.php',
//             data: {
//                 IDvuelo: IDvuelo,
//                 cantidadPasajeros: cantidadPasajeros,
//                 precioTotal: precioTotal
//             },
//             success: function(response) {
//                 alert(response); // Muestra la respuesta del servidor
//                 // Aquí puedes realizar acciones adicionales si la inserción fue exitosa
//             },
//             error: function(xhr, status, error) {
//                 alert('Hubo un error al realizar la reserva');
//                 // Aquí puedes manejar el error si la inserción falla
//             }
//         });
//     });
//   }