document.addEventListener('click', function (event) {
    if (event.target.id === 'btnContReservap3') {
        event.preventDefault();

        // Recopilar datos de todos los formularios de pasajeros
        const formulariosPasajeros = document.querySelectorAll('form[data-pasajero]');
        const datosPasajeros = [];

        formulariosPasajeros.forEach(formulario => {
            const numeroPasajero = formulario.getAttribute('data-pasajero');
            const nombre = formulario.querySelector(`#nombre${numeroPasajero}`).value;
            const apellido = formulario.querySelector(`#apellido${numeroPasajero}`).value;
            const dni = formulario.querySelector(`#dni${numeroPasajero}`).value;

            datosPasajeros.push({ nombre, apellido, dni });
        });

        // Realizar una solicitud AJAX para enviar los datos al servidor
        fetch('procesar_pasajeros.php', {
            method: 'POST',
            body: JSON.stringify(datosPasajeros),
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            // Procesa la respuesta del servidor si es necesario
            console.log(data);
        });
    }
});
