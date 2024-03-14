$mostrarSecciones = true;
document.addEventListener('DOMContentLoaded', function () {
  // Obtén la imagen y el contenedor
  var imgContainer = document.querySelector('.imgBD');

  // Oculta la imagen por defecto
  imgContainer.style.display = 'none';

  // Muestra la sección correspondiente a ÁNCASH al cargar la página
  var firstDepartmentSection = document.getElementById('ANCASH');
  showSection(firstDepartmentSection);

  // Obtén la lista de enlaces de los departamentos
  var links = document.querySelectorAll('ul li a');

  // Itera sobre cada enlace y agrega un listener de clic
  links.forEach(function (link) {
    link.addEventListener('click', function (event) {
      // Previene el comportamiento predeterminado del enlace
      event.preventDefault();

      // Oculta la imagen al hacer clic en cualquier sección
      imgContainer.style.display = 'none';

      // Obtén el valor del atributo href del enlace
      var targetId = link.getAttribute('href').substring(1);

      // Encuentra la sección correspondiente al departamento
      var targetSection = document.getElementById(targetId);

      // Oculta la sección actual y muestra la nueva sección
      hideSection(firstDepartmentSection);
      showSection(targetSection);
    });
  });

  // Función para mostrar una sección
  function showSection(section) {
    section.style.display = 'block';

    // Realiza el scroll suave hasta la sección
    section.scrollIntoView({ behavior: 'smooth' });
  }

  // Función para ocultar una sección
  function hideSection(section) {
    section.style.display = 'none';
  }
});
