$(document).ready(function () {
    // Manejar el formulario cuando se envía
    $("#form-detalles").on("submit", function (event) {
        event.preventDefault(); // Evita que se envíe el formulario de manera tradicional

        // Realizar una solicitud AJAX para enviar los datos al servidor
        $.ajax({
             url: "registrodetalles.php",
            type: "POST",
            data: $(this).serialize(),
            success: function (response) {
                var data = JSON.parse(response);
                if (data.success) {
                    alert(data.message); // Muestra un mensaje de confirmación
                } else {
                    alert(data.message); // Muestra un mensaje de error
                }
            },
            error: function () {
                alert("Ocurrió un error en la solicitud.");
            }
        });
    });
});
const formulario = document.getElementById("miFormulario");

formulario.addEventListener("submit", function (event) {
  event.preventDefault(); // Evita el envío normal del formulario

  // Recolecta los datos del formulario y crea un objeto FormData
  const formData = new FormData(formulario);

  fetch('procesar_pasajeros.php', {
    method: 'POST',
    body: formData,
  })
  .then(response => response.text())
  .then(responseText => {
    alert(responseText); // Muestra la respuesta del servidor
  })
  .catch(error => {
    console.error('Error:', error);
  });
});