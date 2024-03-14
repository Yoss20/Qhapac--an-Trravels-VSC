const cantidadInputI = document.getElementById('cantidadInputI');
const cantidadInputIV = document.getElementById('cantidadInputIV');

cantidadInputI.addEventListener('input', function() {
    if (this.value < 0 || this.value % 1 !== 0) {
        this.value = Math.max(0, Math.floor(this.value)); // Redondear hacia abajo
    }
});

cantidadInputIV.addEventListener('input', function() {
    if (this.value < 0 || this.value % 1 !== 0) {
        this.value = Math.max(0, Math.floor(this.value)); // Redondear hacia abajo
    }
});
