
    document.addEventListener('DOMContentLoaded', function() {
        const btnBuscarIdaYVuelta = document.querySelector('.btnIV');
        const formularioReserva = document.querySelector('.Reserva');
        const info1 = document.querySelector('.info1');
        const info2 = document.querySelector('.info2');
        const VuelDispoIDAVUELTA = document.querySelector('.VuelDispoIDAVUELTA');

    
        const VueloIV = document.querySelector('.selecVueloIV');
    
        btnBuscarIdaYVuelta.addEventListener('click', function() {
            formularioReserva.style.display = 'block';
            formularioReserva.style.display = 'flex';

             VueloIV.style.display = 'block';
            info1.style.display = 'block';
            info2.style.display = 'block';
            VuelDispoIDAVUELTA.style.display = 'block';
            VuelDispoIDAVUELTA.style.display = 'flex';
        });
    });

