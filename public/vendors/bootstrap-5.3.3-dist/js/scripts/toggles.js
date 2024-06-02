function togglePasswordVisibility(icon) {
    var passwordField = document.querySelector(icon.getAttribute('toggle'));
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    } else {
        passwordField.type = 'password';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    }
}


function updateEmailDomain() {
    var emailDomain = document.getElementById('email-domain');
    var studentRadio = document.getElementById('student');
    if (studentRadio.checked) {
        emailDomain.innerHTML = '@etu.uae.ac.ma';
    } else {
        emailDomain.innerHTML = '@uae.ac.ma';
    }
}


document.addEventListener("DOMContentLoaded", function() {
var roleButtons = document.querySelectorAll('.select-role .btn');

roleButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        roleButtons.forEach(function(btn) {
            btn.classList.remove('active');
        });
        this.classList.add('active');
    });
});
});