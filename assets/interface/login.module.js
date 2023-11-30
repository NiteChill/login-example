const mailInput = document.querySelector('#mailInput'),
  mailField = document.querySelector('#mailField'),
  mailLabel = document.querySelector('#mailLabel'),
  mailIndicator = document.querySelector('#mailIndicator');

mailField.addEventListener('click', () => {
  mailInput.focus();
})

mailInput.addEventListener('focus', () => {
  mailInput.style.height = '1.208125rem';
  mailLabel.classList.replace('body-large', 'body-small');
  mailIndicator.style.width = '100%';
})

mailInput.addEventListener('blur', () => {
  mailIndicator.style.width = '0';
  if (mailInput.value === '') {
    mailInput.style.height = '0';
    mailLabel.classList.replace('body-small', 'body-large');
  }
});

const passwordInput = document.querySelector('#passwordInput'),
  passwordField = document.querySelector('#passwordField'),
  passwordLabel = document.querySelector('#passwordLabel'),
  passwordIndicator = document.querySelector('#passwordIndicator'),
  passwordIcon = document.querySelector('#passordIcon');

passwordField.addEventListener('click', () => {
  passwordInput.focus();
});

passwordInput.addEventListener('focus', () => {
  passwordInput.style.height = '1.208125rem';
  passwordLabel.classList.replace('body-large', 'body-small');
  passwordIndicator.style.width = '100%';
});

passwordInput.addEventListener('blur', () => {
  passwordIndicator.style.width = '0';
  if (passwordInput.value === '') {
    passwordInput.style.height = '0';
    passwordLabel.classList.replace('body-small', 'body-large');
  }
});

passwordInput.addEventListener('input', () => {
  passwordInput.value !== ''
    ? (passwordIcon.style.display = 'flex')
    : (passwordIcon.style.display = 'none');
});

passwordIcon.addEventListener('click', () => {
  passwordInput.type === 'text'
    ? (passwordInput.type = 'password')
    : (passwordInput.type = 'text');
});