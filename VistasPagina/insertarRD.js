$(document).ready(function() {
    $('.btnReservaI').on('click', function(event) {
        var idVuelo = event.target.getAttribute('data-idvueloI');
        var precioTotal = $(this).closest('.VuelDispoIDA').find('.precTotal').val();
        var idReservaGlobal = $('#idReservaUnico').val();
        var idDetalleIGlobal = $('#idDetalleIGlobal').val();
        var cantidadPersonas = obtenerCantidadPersonas();   

        $.ajax({
            type: 'POST',
            url: 'detalleReserva.php',
            data: { idVuelo: idVuelo, 
                precioTotal: precioTotal, 
                cantidadPersonas: cantidadPersonas, 
                idReservaGlobal: idReservaGlobal, 
                idDetalleIGlobal: idDetalleIGlobal },
            success: function(response) {
                console.log('Respuesta del servidor:', response);
            },
            error: function(err) {
                console.error('Error al hacer la reserva:', err);
            }
        });
    });

    // Código para reservar vuelos de regreso
    $('.btnReservaR').on('click', function(event) {
        var idVueloR = event.target.getAttribute('data-idvueloR');
        var precioTotalR = $(this).closest('.VuelDispoIDAVUELTA').find('.precTotal').val();
        var idReservaGlobal = $('#idReservaUnico').val();
        var idDetalleRGlobal = $('#idDetalleRGlobal').val();
        var cantidadPersonas = obtenerCantidadPersonas();

        console.log('Datos enviados (Regreso):', idVueloR, precioTotalR, cantidadPersonas);

        // Realiza tu llamada AJAX para guardar los datos del vuelo de regreso en la base de datos
        $.ajax({
            type: 'POST',
            url: 'detalleReservaRegreso.php', // Cambia la URL según corresponda
            data: {
                idVueloR: idVueloR,
                precioTotalR: precioTotalR,
                cantidadPersonas: cantidadPersonas, 
                idReservaGlobal: idReservaGlobal, 
                idDetalleRGlobal: idDetalleRGlobal 
            },
            success: function(response) {
                console.log('Respuesta del servidor (Regreso):', response);
            },
            error: function(err) {
                console.error('Error al hacer la reserva (Regreso):', err);
            }
        });
    });

});


function obtenerCantidadPersonas() {
    return parseInt(document.getElementById('cantidadPasajeros').value);
}

