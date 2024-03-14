document.addEventListener("DOMContentLoaded", function () {
    const dropdownButton = document.getElementById("dropdown-button");
    const dropdownMenu = document.getElementById("dropdown-menu");

    dropdownButton.addEventListener("click", function () {
        if (dropdownMenu.style.display === "block") {
            dropdownMenu.style.display = "none";
        } else {
            dropdownMenu.style.display = "block";
        }
    });

    // Cierra el menú desplegable si se hace clic en cualquier otro lugar de la página.
    document.addEventListener("click", function (event) {
        if (event.target !== dropdownButton && event.target !== dropdownMenu) {
            dropdownMenu.style.display = "none";
        }
    });
});
