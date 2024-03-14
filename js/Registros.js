function validarFormulario(event) {
  var password1 = document.querySelector('input[name="contrasena"]').value;
  var password2 = document.querySelector('input[name="repetir_contrasena"]').value;
  var errorMessage = document.getElementById('error-message');
  var checkbox = document.querySelector('input[type="checkbox"]');

  limitarLongitudDni(event);

  // Verifica si el checkbox está marcado
  if (!checkbox.checked) {
    errorMessage.textContent = 'Debes aceptar los términos y condiciones';
    errorMessage.style.display = 'block';
    event.preventDefault(); // Evita que el formulario se envíe
    return;
  }

  // Verifica si las contraseñas coinciden
  if (password1 !== password2) {
    errorMessage.textContent = 'Las contraseñas no coinciden';
    errorMessage.style.display = 'block';
    event.preventDefault(); // Evita que el formulario se envíe
    return;
  }

  // Verifica la fortaleza de la contraseña
  if (!validarFortalezaContrasena(event)) {
    return; // Evita que el formulario se envíe
  }
      errorMessage.textContent = '';
  }



// Espera a que se cargue el documento
document.addEventListener("DOMContentLoaded", function() {
  // Obtén el botón "Consultar" por su ID
  var consultarBtn = document.getElementById("consultar");
  
  // Agrega un controlador de eventos para el clic en el botón
  consultarBtn.addEventListener("click", function() {
    // Obtén el valor del campo DNI
    var dni = document.querySelector('input[name="dni"]').value;

    // Realiza la solicitud AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "consulta-dni-ajax.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        var data = JSON.parse(xhr.responseText);
        if (data === 1) {
          // Handle error
          alert('El DNI tiene que tener 8 dígitos');
        } else {
          // Rellena los campos con la información obtenida
          document.querySelector('input[name="nombre"]').value = data.nombres;
          document.querySelector('input[name="apellidop"]').value = data.apellidoPaterno;
          document.querySelector('input[name="apellidom"]').value = data.apellidoMaterno;
        }
      }
    };

    // Envía la solicitud AJAX con el valor del DNI
    xhr.send("dni=" + dni);
  });
});

function abrirVentanaEmergente(url) {
  // Obtén el tamaño de la ventana del navegador
  var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  var windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

  // Calcula la posición central
  var left = (windowWidth - 600) / 2;
  var top = (windowHeight - 400) / 2;

  // Abre una nueva ventana emergente centrada
  window.open(url, 'ventanaEmergente', 'width=600, height=400, left=' + left + ', top=' + top + ', scrollbars=yes, resizable=yes');

  return false; // Esto evita que el enlace original se siga ejecutando
}

function validarFortalezaContrasena(event) {
  var password1 = document.querySelector('input[name="contrasena"]').value;
  var errorMessage = document.getElementById('error-message');

  // Expresiones regulares para verificar la fortaleza de la contraseña
  var tieneMayuscula = /[A-Z]/.test(password1);
  var tieneNumero = /\d/.test(password1);

  // Verifica si la contraseña tiene ambos requisitos
  if (!tieneMayuscula || !tieneNumero) {
    errorMessage.textContent = 'La contraseña debe contener al menos una mayúscula y un número.';
    errorMessage.style.display = 'block';
    event.preventDefault(); // Evita que el formulario se envíe
    return false;
  }

  // Verifica si la contraseña tiene al menos 8 caracteres
  if (password1.length < 8) {
    errorMessage.textContent = 'La contraseña debe tener al menos 8 caracteres.';
    errorMessage.style.display = 'block';
    event.preventDefault(); // Evita que el formulario se envíe
    return false;
  } else {
    errorMessage.textContent = '';
    return true;
  }
}

function limitarLongitudDni(event) {
  var dni = document.querySelector('input[name="dni"]');
  var errorMessage = document.getElementById('error-message');

  // Obtén la longitud del texto del input
  var longitud = dni.value.length;

  // Si la longitud es mayor que 8, recorta el texto
  if (longitud > 8) {
    dni.value = dni.value.substring(0, 8);
  }

  // Si la longitud es menor que 8, muestra el error
  if (longitud < 8) {
    errorMessage.textContent = 'Ingrese un DNI válido';
    errorMessage.style.display = 'block';
    event.preventDefault(); // Evita que el formulario se envíe
  } else {
    errorMessage.textContent = '';
  }
}



 