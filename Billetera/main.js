// CARDHOLDER NAME
let nameCard = document.querySelector('.card__details-name');
let nameInput = document.querySelector('#cardholder');
let nameErrorDiv = document.querySelector('.form__cardholder--error');

// CARD NUMBER
let numberCard = document.querySelector('.card__number');
let numberInput = document.querySelector('#cardNumber');
let numberErrorDiv = document.querySelector('.form__inputnumber--error');

// MM
let monthCard = document.querySelector('.card__month');
let monthInput = document.querySelector('#cardMonth');
let monthErrorDiv = document.querySelector('.form__input-mm--error');

// YY
let yearCard = document.querySelector('.card__year');
let yearInput = document.querySelector('#cardYear');
let yearErrorDiv = document.querySelector('.form__input-yy--error');

// CVC
let cvcCard = document.querySelector('.card-back__cvc');
let cvcInput = document.querySelector('#cardCvc');
let cvcErrorDiv = document.querySelector('.form__input-cvc--error');

// Ingreso dinámico del nombre
nameInput.addEventListener('input', () => {
    if (nameInput.value == '') {
        nameCard.innerText = 'YOSSELIN ALTAPIURANO'
    } else {
        nameCard.innerText = nameInput.value;
    }
});

// Ingreso dinámico del número
numberInput.addEventListener('input', () => {
    // Validando que haya una letra,
    let regExp = /[A-z]/g;
    if (regExp.test(numberInput.value)) {
        showError(numberInput, numberErrorDiv, 'FORMATO INCORRECTO, SOLO NÚMEROS');
    } else {
        // Borrando espacios ingresados por el usuario, agregando espacios cada 4 dígitos, y borrando el espacio final
        numberInput.value = numberInput.value.replace(/\s/g, '').replace(/([0-9]{4})/g, '$1 ').trim();
        showError(numberInput, numberErrorDiv, '', false);
    }

    // Actualizando gráficamente la tarjeta:
    numberCard.innerText = numberInput.value;

    // Mostrando los 0s por defecto cuando no se ha ingresado nada
    if (numberInput.value == '') {
        numberCard.innerText = '0000 0000 0000 0000';
    }
});

// Ingreso dinámico del mes
monthInput.addEventListener('input', () => {
    monthCard.innerText = monthInput.value;
    validateLetters(monthInput, monthErrorDiv);
});

// Ingreso dinámico del año
yearInput.addEventListener('input', () => {
    yearCard.innerText = yearInput.value;
    validateLetters(yearInput, yearErrorDiv);
});

// Ingreso dinámico de CVC
cvcInput.addEventListener('input', () => {
    cvcCard.innerText = cvcInput.value;
    validateLetters(cvcInput, cvcErrorDiv);
});

// Función para mostrar la sección de agradecimiento
function showThanksSection() {
    formSection.style.display = 'none';
    thanksSection.style.display = 'block';
}

// Boton Confirm
let confirmBtn = document.querySelector('.form__submit');

confirmBtn.addEventListener('click', event => {
    event.preventDefault();

    // Validar Name
    if (verifyIsFilled(nameInput, nameErrorDiv)) {
        nameValidation = true;
    } else {
        nameValidation = false;
    }

    // Validar Número
    if (verifyIsFilled(numberInput, numberErrorDiv) == true) {
        if (numberInput.value.length == 19) {
            showError(numberInput, numberErrorDiv, '', false);
            numberValidation = true;
        } else {
            showError(numberInput, numberErrorDiv, 'Número incorrecto');
            numberValidation = false;
        }
    }

    // Validar Mes
    if (verifyIsFilled(monthInput, monthErrorDiv)) {
        if (parseInt(monthInput.value) > 0 && parseInt(monthInput.value) <= 12) {
            showError(monthInput, monthErrorDiv, '', false);
            monthValidation = true;
        } else {
            showError(monthInput, monthErrorDiv, 'Mes incorrecto');
            monthValidation = false;
        }
    }

    // Validar Año
    if (verifyIsFilled(yearInput, yearErrorDiv)) {
        if (parseInt(yearInput.value) > 22 && parseInt(yearInput.value) <= 27) {
            showError(yearInput, yearErrorDiv, '', false);
            yearValidation = true;
        } else {
            showError(yearInput, yearErrorDiv, 'Año incorrecto');
            yearValidation = false;
        }
    }

    // Validar CVC
    if (verifyIsFilled(cvcInput, cvcErrorDiv)) {
        if (cvcInput.value.length == 3) {
            showError(cvcInput, cvcErrorDiv, '', false);
            cvcValidation = true;
        } else {
            showError(cvcInput, cvcErrorDiv, 'CVC incorrecto');
            cvcValidation = false;
        }
    }

    // Mostrar la sección de agradecimiento solo si todas las validaciones son exitosas
    if (nameValidation && numberValidation && monthValidation && yearValidation && cvcValidation) {
        // Llamar a la función para mostrar la sección de agradecimiento
        showThanksSection();
        // Aquí puedes enviar los datos al servidor si es necesario
        // Puedes usar AJAX, Fetch API o simplemente dejar que el formulario se envíe (si no necesitas procesar los datos en el cliente)
        // formSection.submit();
    }
});


// Funciones:

function showError(divInput, divError, msgError, show = true){
    if(show){
        divError.innerText = msgError;
        divInput.style.borderColor = '#FF0000';
    }else{
        divError.innerText = msgError;
        divInput.style.borderColor = 'hsl(270, 3%, 87%)';
    }
}

function verifyIsFilled(divInput, divError){
    if(divInput.value.length> 0){
        showError(divInput, divError, "", false);
        return true;
    }else{
        showError(divInput, divError, "No se puede dejar en blanco");
        return false;
    }
}

function validateLetters(input, divError){
    // Validando que haya una letra,
    let regExp = /[A-z]/g;
    if(regExp.test(input.value)){
        showError(input, divError, 'Formato incorrecto, solo números');
    }else{
        showError(input, divError, '', false);
    }
}