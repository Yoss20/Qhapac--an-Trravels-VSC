document.addEventListener("DOMContentLoaded", function () {
    const paso1 = document.querySelector(".paso1");
    const paso2 = document.querySelector(".paso2");
    const paso3 = document.querySelector(".paso3");
    const pasosR1 = document.querySelector(".reserva__link1");
    const pasosR2 = document.querySelector(".reserva__link2");
    const pasosR3 = document.querySelector(".reserva__link3");

    const btnContReservap2 = document.getElementById("btnContReservap2");
    const btnContReservap3 = document.getElementById("btnContReservap3");

    // Ocultar Paso 2 y Paso 3 al principio
    paso2.style.display = "none";
    paso3.style.display = "none";
    pasosR1.style.fontWeight = "bold";
    pasosR1.style.color = "#fff";
    

    // Mostrar Paso 2 al hacer clic en btnContReservap2
    btnContReservap2.addEventListener("click", function () {
        paso1.style.display = "none";
        paso2.style.display = "block";
        pasosR1.style.fontWeight = "lighter";
        pasosR1.style.color = "#333333";
        pasosR2.style.fontWeight = "bold";
        pasosR2.style.color = "#fff";
    });

    // Mostrar Paso 3 al hacer clic en btnContReservap3
    btnContReservap3.addEventListener("click", function () {
        paso2.style.display = "none";
        paso3.style.display = "block";
        pasosR3.style.fontWeight = "bold";
        pasosR3.style.color = "#fff";
        pasosR2.style.fontWeight = "lighter";
        pasosR2.style.color = "#333333";
    });
});
