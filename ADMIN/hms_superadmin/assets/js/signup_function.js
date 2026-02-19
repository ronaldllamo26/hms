const password = document.getElementById('password');
const confirm  = document.getElementById('confirm_password');
const errorMsg = document.getElementById('password-error');

function validatePasswords() {
    if (confirm.value && password.value !== confirm.value) {
        errorMsg.style.display = 'block';
        confirm.setCustomValidity('Passwords do not match.');
    } else {
        errorMsg.style.display = 'none';
        confirm.setCustomValidity('');
    }
}

password.addEventListener('input', validatePasswords);
confirm.addEventListener('input', validatePasswords);