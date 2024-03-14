const enlaces = document.querySelectorAll('.menu .enlace');
const formularios = document.querySelectorAll('.formulario');

// Oculta todos los formularios excepto el primero
formularios.forEach((formulario, index) => {
  if (index === 0) {
    formulario.style.display = 'block';
  } else {
    formulario.style.display = 'none';
  }
});

enlaces.forEach((link) => {
  link.addEventListener('click', (event) => {
    event.preventDefault();
    const target = link.getAttribute('data-form');

    formularios.forEach((formulario) => {
      if (formulario.id === target) {
        formulario.style.display = 'block';
      } else {
        formulario.style.display = 'none';
      }
    });
  });
});
