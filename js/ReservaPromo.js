function calcularMontoTotal(){
  const cantidadPasajerosInput = document.getElementById('cantidadPasajeros');
  const totalInput = document.getElementById('totAcum');
  const costoPorPersona = 2250; // Costo por persona
  cantidadPasajerosInput.addEventListener('input', function() {
    const cantidadPasajeros = parseInt(cantidadPasajerosInput.value);
    const total = cantidadPasajeros * costoPorPersona;
    totalInput.value = total;
  });
}


function calcularMontoTotalHB(){
  const cantidadPasajerosInput = document.getElementById('cantidadPasajeros');
  const totalInput = document.getElementById('totAcum');
  const costoPorPersona = 1200; // Costo por persona
  cantidadPasajerosInput.addEventListener('input', function() {
    const cantidadPasajeros = parseInt(cantidadPasajerosInput.value);
    const total = cantidadPasajeros * costoPorPersona;
    totalInput.value = total;
  });
}

function calcularMontoTotalLuna(){
  const cantidadPasajerosInput = document.getElementById('cantidadPasajeros');
  const totalInput = document.getElementById('totAcum');
  const costoPorPersona = 2000; // Costo por persona
  cantidadPasajerosInput.addEventListener('input', function() {
    const cantidadPasajeros = parseInt(cantidadPasajerosInput.value);
    const total = cantidadPasajeros * costoPorPersona;
    totalInput.value = total;
  });
}

function calcularMontoTotalNY(){
  const cantidadPasajerosInput = document.getElementById('cantidadPasajeros');
  const totalInput = document.getElementById('totAcum');
  const costoPorPersona = 400; // Costo por persona
  cantidadPasajerosInput.addEventListener('input', function() {
    const cantidadPasajeros = parseInt(cantidadPasajerosInput.value);
    const total = cantidadPasajeros * costoPorPersona;
    totalInput.value = total;
  });
}

function calcularMontoTotalPromo23(){
  const cantidadPasajerosInput = document.getElementById('cantidadPasajeros');
  const totalInput = document.getElementById('totAcum');
  const costoPorPersona = 1500; // Costo por persona
  cantidadPasajerosInput.addEventListener('input', function() {
    const cantidadPasajeros = parseInt(cantidadPasajerosInput.value);
    const total = cantidadPasajeros * costoPorPersona;
    totalInput.value = total;
  });
}

function calcularMontoTotalSanValentin(){
  const cantidadPasajerosInput = document.getElementById('cantidadPasajeros');
  const totalInput = document.getElementById('totAcum');
  const costoPorPersona = 1200; // Costo por persona
  cantidadPasajerosInput.addEventListener('input', function() {
    const cantidadPasajeros = parseInt(cantidadPasajerosInput.value);
    const total = cantidadPasajeros * costoPorPersona;
    totalInput.value = total;
  });
}
//Calcular fechaidaoVueltaAutomatico 7 dias
document.addEventListener("DOMContentLoaded", function() {
  const fechaInicio = document.getElementById('fecha-salida');
  const fechaFin = document.getElementById('fecha-regreso');

  function calcularFechaRegreso() {
    const fechaInicioValue = new Date(fechaInicio.value);
    const fechaFinValue = new Date(fechaInicioValue);
    fechaFinValue.setDate(fechaInicioValue.getDate() + 8); // Cambiar a 8 para 8 días

    const year = fechaFinValue.getFullYear();
    const month = (fechaFinValue.getMonth() + 1).toString().padStart(2, '0');
    const day = fechaFinValue.getDate().toString().padStart(2, '0');

    fechaFin.value = `${year}-${month}-${day}`;
  }

  function calcularFechaSalida() {
    const fechaFinValue = new Date(fechaFin.value);
    const fechaInicioValue = new Date(fechaFinValue);
    fechaInicioValue.setDate(fechaFinValue.getDate() - 6); // Cambiar a 8 para 8 días

    const year = fechaInicioValue.getFullYear();
    const month = (fechaInicioValue.getMonth() + 1).toString().padStart(2, '0');
    const day = fechaInicioValue.getDate().toString().padStart(2, '0');

    fechaInicio.value = `${year}-${month}-${day}`;
  }

  fechaInicio.addEventListener('change', calcularFechaRegreso);
  fechaFin.addEventListener('change', calcularFechaSalida);
});

//calcular fechaidaovueltaAutomatico 3 dias
document.addEventListener("DOMContentLoaded", function() {
  const fechaInicio = document.getElementById('fecha-salida1');
  const fechaFin = document.getElementById('fecha-regreso1');

  function calcularFechaRegreso() {
    const fechaInicioValue = new Date(fechaInicio.value);
    const fechaFinValue = new Date(fechaInicioValue);
    fechaFinValue.setDate(fechaInicioValue.getDate() + 4); // Cambiar a 8 para 8 días

    const year = fechaFinValue.getFullYear();
    const month = (fechaFinValue.getMonth() + 1).toString().padStart(2, '0');
    const day = fechaFinValue.getDate().toString().padStart(2, '0');

    fechaFin.value = `${year}-${month}-${day}`;
  }

  function calcularFechaSalida() {
    const fechaFinValue = new Date(fechaFin.value);
    const fechaInicioValue = new Date(fechaFinValue);
    fechaInicioValue.setDate(fechaFinValue.getDate() - 2); // Cambiar a 8 para 8 días

    const year = fechaInicioValue.getFullYear();
    const month = (fechaInicioValue.getMonth() + 1).toString().padStart(2, '0');
    const day = fechaInicioValue.getDate().toString().padStart(2, '0');

    fechaInicio.value = `${year}-${month}-${day}`;
  }

  fechaInicio.addEventListener('change', calcularFechaRegreso);
  fechaFin.addEventListener('change', calcularFechaSalida);
});



const miNumeroInput = document.getElementById('numero-personas');
const errorMessage = document.getElementById('error-message');

miNumeroInput.addEventListener('input', function() {
  const valor = parseInt(miNumeroInput.value, 10);

  if (valor > 5) {
    errorMessage.textContent = 'El número no puede ser mayor que 5';
    miNumeroInput.value = 5; // Restablecer el valor a 5 si es mayor
  } else {
    errorMessage.textContent = ''; // Borrar el mensaje de error si es válido
  }
});




