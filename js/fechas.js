const fechaInput = document.getElementById('fechaInput');
const fechaInput1 = document.getElementById('fechaInput1');
const fechaInput2 = document.getElementById('fechaInput2');

fechaInput.addEventListener('change', function() {
    const selectedDate = new Date(this.value);
    const now = new Date();

    if (selectedDate < now) {
        this.value = ''; // Limpiar el valor si es una fecha pasada
    }
});

fechaInput1.addEventListener('change', function() {
    const selectedDate = new Date(this.value);
    const now = new Date();

    if (selectedDate < now) {
        this.value = ''; // Limpiar el valor si es una fecha pasada
    }
});

fechaInput2.addEventListener('change', function() {
    const selectedDate = new Date(this.value);
    const now = new Date();

    if (selectedDate < now) {
        this.value = ''; // Limpiar el valor si es una fecha pasada
    }
});


