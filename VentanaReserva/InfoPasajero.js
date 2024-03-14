const inputField = document.querySelector('input');

inputField.addEventListener('focus', () => {
  inputField.parentNode.classList.add('focused');
});

inputField.addEventListener('blur', () => {
  if (inputField.value === '') {
    inputField.parentNode.classList.remove('focused');
  }
});
