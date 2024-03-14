document.addEventListener("DOMContentLoaded", function () {
  var passwordField = document.getElementById("passwordField");
  var miImagen = document.getElementById("mi-imagen");
  var miAnimacion = document.getElementById("mi-animacion");

  // Cambia la imagen por defecto al cargar la página
  miImagen.src = "../Login/img/Abiertos.gif";

  // Agrega un evento para cuando el cursor entra al campo de contraseña
  passwordField.addEventListener("mouseenter", function () {
    // Oculta la imagen actual y muestra la animación de cerrar los ojos
    miImagen.style.display = "none";
    miAnimacion.style.display = "block";
  });

  // Agrega un evento para cuando el cursor sale del campo de contraseña
  passwordField.addEventListener("mouseleave", function () {
    // Agrega un timestamp único a la URL de la imagen por defecto
    miImagen.src = "../Login/img/Abiertos.gif?" + Date.now();
    miImagen.style.display = "block";
    miAnimacion.style.display = "none";
  });
});
