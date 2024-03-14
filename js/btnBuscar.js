
    document.addEventListener('DOMContentLoaded', function() {
        const btnBuscarSoloIda = document.querySelector('.btnI');
        const btnBuscarIdaYVuelta = document.querySelector('.btnIV');
        const formularioReserva = document.querySelector('.Reserva');
        const info1 = document.querySelector('.info1');
        const info2 = document.querySelector('.info2');
        const VuelDispoIDA = document.querySelector('.VuelDispoIDA');
        const VuelDispoIDAVUELTA = document.querySelector('.VuelDispoIDAVUELTA');

        const VueloI = document.querySelector('.selecVueloI');
        const VueloIV = document.querySelector('.selecVueloIV');

        
    
        btnBuscarSoloIda.addEventListener('click', function() {
            formularioReserva.style.display = 'block';
            formularioReserva.style.display = 'flex';


            info1.style.display = 'block';
            info2.style.display = 'none';
            VuelDispoIDAVUELTA.style.display = 'none';
           
            
        });
    
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

