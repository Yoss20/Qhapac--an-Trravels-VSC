// Obtener todos los botones "Reservar"
const btnReservaI = document.querySelectorAll('.btnReservaI');
const btnReservaR = document.querySelectorAll('.btnReservaR');

    const VUELOREGRESO = document.querySelector('.boletoR');
    const VUELOSALIDA = document.querySelector('.boletoS');
    // const formularioReserva = document.querySelector('.Reserva');

    const formularioDetalleBoleta = document.querySelector('.CostosVuel');

// ... (código anterior para los listeners de eventos btnReservaI y btnReservaR)

let tarifBase1 = 0, imp1 = 0, totVuelo1 = 0, tarifBase2 = 0, imp2 = 0, totVuelo2 = 0;

// Función para sumar los valores
function sumarTotales() {
  const totalTarifBase = parseFloat(tarifBase1) + parseFloat(tarifBase2);
  const totalImp = parseFloat(imp1) + parseFloat(imp2);
  const totalTotVuelo = parseFloat(totVuelo1) + parseFloat(totVuelo2);

  console.log(totalTarifBase);
  console.log(totalImp);
  console.log(totalTotVuelo);

 //Actualizar los elementos en la página con los totales
  document.querySelector('.tarifBase').value = totalTarifBase.toFixed(2);
  document.querySelector('.imp').value = totalImp.toFixed(2);
  document.querySelector('.desc').value = (0.00).toFixed(2); //estos vuelos no tienen descuento promocional
  document.querySelector('.totVuelo').value = totalTotVuelo.toFixed(2);
 } 

btnReservaI.forEach((btnI) => {
 btnI.addEventListener('click', (event) => {
   // ... (código para el vuelo I)
   // Obtener el vuelo asociado al botón
   const vueloSeleccionado = event.target.getAttribute('data-idvueloI');
   const horaSalida = event.target.closest('.VuelDispoIDA').querySelector('.HoraSal').value;
   const horaLlegada = event.target.closest('.VuelDispoIDA').querySelector('.HoraLleg').value;
   const fecha = event.target.closest('.VuelDispoIDA').querySelector('.fechaS').value;

   let Total = event.target.closest('.VuelDispoIDA').querySelector('.precTotal').value;
   Total = parseFloat(Total.toString().replace(/,/g, ''));
  
   
   document.querySelector('.horavueloSI').value = horaSalida;// Actualizar con el destino del vuelo
   document.querySelector('.horavueloLI').value = horaLlegada;
   document.querySelector('.fechavueloSI').value = fecha;

   tarifBase1 = (Total*(5/6)).toFixed(2);
   imp1 = (Total*(1/6)).toFixed(2);
   totVuelo1 = (Total*(1/1)).toFixed(2);

   sumarTotales();
 });
});

btnReservaR.forEach((btnR) => {
 btnR.addEventListener('click', (event) => {
   // ... (código para el vuelo R)
   // Obtener el vuelo asociado al botón
   const vueloSeleccionado = event.target.getAttribute('data-idvueloR');
   const horaSalidaR = event.target.closest('.VuelDispoIDAVUELTA').querySelector('.HoraSal').value;
   const horaLlegadaR = event.target.closest('.VuelDispoIDAVUELTA').querySelector('.HoraLleg').value;
   const fechavueloSR = event.target.closest('.VuelDispoIDAVUELTA').querySelector('.fechaS').value;

   let TotalR = event.target.closest('.VuelDispoIDAVUELTA').querySelector('.precTotal').value;
   TotalR = parseFloat(TotalR.toString().replace(/,/g, ''));

   document.querySelector('.horavueloSR').value = horaSalidaR;// Actualizar con el destino del vuelo
   document.querySelector('.horavueloLR').value = horaLlegadaR;
   document.querySelector('.fechavueloSR').value = fechavueloSR;

   tarifBase2 = (TotalR*(5/6)).toFixed(2);
   imp2 = (TotalR*(1/6)).toFixed(2);
   totVuelo2 = (TotalR*(1/1)).toFixed(2);
   // Actualizar otros campos con la información del vuelo seleccionado

   // Llamar a la función para sumar los totales
   sumarTotales();
 });
});
