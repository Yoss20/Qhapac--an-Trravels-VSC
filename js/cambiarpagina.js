// // Obtén el elemento select
// const tipoViajeSelect = document.getElementById("tipoViaje");
// const btnBuscar2index = document.getElementById("submit2");

// // Obtén los formularios
// const formularioSoloIda = document.querySelector(".flex_SOLOIDA");
// const formularioIdaYVuelta = document.querySelector(".flex_IDAYVUELTA");

// // Agrega un evento de cambio al elemento select
// tipoViajeSelect.addEventListener("change", function () {
//     if (tipoViajeSelect.value === "soloIda") {
//         // Mostrar el formulario Solo Ida
//         formularioSoloIda.style.display = "block";
//         formularioIdaYVuelta.style.display = "none";
//         formularioSoloIda.style.display = "flex";
//         formularioSoloIda.style.flexDirection = "row";

//     } else if (tipoViajeSelect.value === "idaYVuelta") {
//         // Mostrar el formulario Ida y Vuelta
//         formularioSoloIda.style.display = "none";
//         formularioIdaYVuelta.style.display = "block";
//         formularioIdaYVuelta.style.display = "flex";
//         formularioIdaYVuelta.style.flexDirection = "row";
//     }

//     // Configuración del campo de destino con autocompletado
//         $("#destinosInput").autocomplete({
//             source: "send.php", // Ruta a un script que obtiene los destinos
//             minLength: 1,
//         });
// });

// btnBuscar2index.addEventListener('click', function() {
//     formularioSoloIda.style.display = "none";
//     formularioIdaYVuelta.style.display = "block";
//     formularioIdaYVuelta.style.display = "flex";
//     formularioIdaYVuelta.style.flexDirection = "row";
// });

