        function hacerVisibleContraseña() {
            var passwordInput = document.getElementById("contraseña");
            var toggleCheckbox = document.getElementById("mostrarContraseña");
            var toggleIcon = document.getElementById("Icono");

            if (toggleCheckbox.checked) {
                passwordInput.type = "text";
                toggleIcon.className = "far fa-eye-slash";
            } else {
                passwordInput.type = "password";
                toggleIcon.className = "far fa-eye";
            }
    }