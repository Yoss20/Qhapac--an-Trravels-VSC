const generarNumeroReserva = () => {
    // Creamos un array vacío para almacenar los números aleatorios generados
    const numerosGenerados = [];
  
    // Generamos un número aleatorio entre 1 y 999999999
    const numeroAleatorio = Math.floor(Math.random() * 1000000000);
  
    // Mientras el número aleatorio ya haya sido generado, generamos uno nuevo
    while (numerosGenerados.includes(numeroAleatorio)) {
      numeroAleatorio = Math.floor(Math.random() * 1000000000);
    }
  
    // Agregamos el número aleatorio al array de números generados
    numerosGenerados.push(numeroAleatorio);
  
    // Obtenemos el elemento con id "idReserva" del formulario
    const inputIdReserva = document.querySelector("#idReserva");
  
    // Asignamos el número aleatorio al elemento input
    inputIdReserva.value = numeroAleatorio;
  };
  
  generarNumeroReserva();
  