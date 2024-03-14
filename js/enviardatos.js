// function enviarDatos() {
//     const origen = document.querySelector('.opcionesOrigenes').value;
//     const destino = document.querySelector('.opcionesDestinos').value;
//     const fecha = document.querySelector('#fechaInput').value;
//     const cantidadPersonas = document.querySelector('.form-control[type="number"]').value;

//     // Codificar los datos para enviarlos a la otra página
//     const datos = `?origen=${encodeURIComponent(origen)}&destino=${encodeURIComponent(destino)}&fecha=${encodeURIComponent(fecha)}&cantidad=${cantidadPersonas}`;
    
//     // Redirigir a la otra página con los datos en la URL
//     window.location.href = `vuelos.php${datos}`;
// }