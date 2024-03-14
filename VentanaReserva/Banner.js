// Controla los pasos del banner
var pasos = document.querySelectorAll("li");
var pasoActual = 1;

// Activa el primer paso
pasos.forEach(function(li) {
  li.classList.remove("activo");
});
pasos[0].classList.add("activo");

// Activa el siguiente paso al hacer clic en él
pasos.forEach(function(li) {
  li.addEventListener("click", function() {
    // Desactiva el paso actual
    li.classList.remove("activo");

    // Activa el siguiente paso
    if (pasoActual < pasos.length - 1) {
      pasos[pasoActual + 1].classList.add("activo");
      pasoActual++;
    }
  });
});

