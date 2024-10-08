document.getElementById("login-button").addEventListener("click", function() {
    const emailField = document.getElementById("email");
    const passwordField = document.getElementById("password");

    let valid = true;

    // Validar correo electrónico
    if (emailField.value.trim() === "" || !validateEmail(emailField.value)) {
        emailField.classList.add("is-invalid");
        valid = false;
    } else {
        emailField.classList.remove("is-invalid");
    }

    // Validar contraseña
    if (passwordField.value.trim() === "") {
        passwordField.classList.add("is-invalid");
        valid = false;
    } else {
        passwordField.classList.remove("is-invalid");
    }

    if (valid) {
        // Aquí puedes agregar la lógica para enviar el formulario
        alert("Formulario enviado correctamente");
    }
});

function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}
