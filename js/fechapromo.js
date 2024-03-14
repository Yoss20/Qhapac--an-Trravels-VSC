const fechaInput3 = document.getElementById('fecha-salida');
const fechaInput4 = document.getElementById('fecha-regreso');

fechaInput3.addEventListener('change', function() {
    const selectedDate = luxon.DateTime.fromISO(this.value);
    const now = luxon.DateTime.local();

    console.log('Fecha seleccionada:', selectedDate.toISO());
    console.log('Fecha actual:', now.toISO());
    console.log('Formato de fecha seleccionado:', this.type); // Atributo type del input
    console.log('Zona horaria seleccionada:', Intl.DateTimeFormat().resolvedOptions().timeZone);

    if (selectedDate < now) {
        console.log('La fecha seleccionada es anterior a la fecha actual.');
        this.value = ''; // Limpiar el valor si es una fecha pasada
    }
});

fechaInput4.addEventListener('change', function() {
    const selectedDate = luxon.DateTime.fromISO(this.value);
    const now = luxon.DateTime.local();

    console.log('Fecha seleccionada:', selectedDate.toISO());
    console.log('Fecha actual:', now.toISO());

    if (selectedDate < now) {
        console.log('La fecha seleccionada es anterior a la fecha actual.');
        this.value = ''; // Limpiar el valor si es una fecha pasada
    }
});
