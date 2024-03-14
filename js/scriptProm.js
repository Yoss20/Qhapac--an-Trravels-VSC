//MiMiau
//El js que estas viendo sirve para el carrusel y el mensajito de debes estar logueado para reservar de la pagina Promociones c:

//
function mensajelogueo(){
  var titulo= "";
  var mensaje="Debes estar logueado ";
  alert(titulo+'\n\n'+mensaje);
}

//obtener elemento de texto reserva
var reseP= document.querySelectorAll('.idlogue');
//Colocar funcion a texto
reseP.forEach(function(resePs){
  resePs.addEventListener('click', function(event){
    event.preventDefault();
    mensajelogueo();
  });
});



// Obtén una referencia a los botones de desplazamiento
const btnIzquierda = document.getElementById('btn-izquierda');
const btnDerecha = document.getElementById('btn-derecha');

// Obtén una referencia al contenedor de vistas previas
const vistasPrevias = document.querySelector('.vistas-previas');

// Agrega un controlador de eventos clic al botón de desplazamiento izquierdo
btnIzquierda.addEventListener('click', function() {
  // Mueve las vistas previas hacia la izquierda
  vistasPrevias.scrollLeft -= 300;
});

// Agrega un controlador de eventos clic al botón de desplazamiento derecho
btnDerecha.addEventListener('click', function() {
  // Mueve las vistas previas hacia la derecha
  vistasPrevias.scrollLeft += 300;
});

document.addEventListener("DOMContentLoaded", function () {
  // Obtén todos los elementos con la clase 'miDiv'
  const divsEspecificos = document.querySelectorAll(".miDiv");

  divsEspecificos.forEach(function (divEspecifico) {
    const images = divEspecifico.querySelectorAll(".tmimag");
    let currentIndex = 0;

    // Oculta la imagen inicial
    images[currentIndex].style.display = "none";

    function showImage() {
      // Oculta la imagen actual
      images[currentIndex].style.display = "none";

      // Calcula el índice de la próxima imagen
      const nextIndex = (currentIndex + 1) % images.length;

      // Muestra la próxima imagen
      images[nextIndex].style.display = "block";

      // Actualiza el índice actual
      currentIndex = nextIndex;
    }

    // Llama a showImage para mostrar la primera imagen después de un breve retraso
    setTimeout(showImage, 100); // 1000 milisegundos = 1 segundo

    // Llama a showImage cada 9 segundos para cambiar de imagen
    setInterval(showImage, 6000); // 9000 milisegundos = 9 segundos
  });
});


