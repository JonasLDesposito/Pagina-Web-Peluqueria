<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/login.css?v=<?php echo time(); ?>">
</head>
<body>
    <form action="" method="POST" class="formcuenta">
            <div class="formulario">
            <div class="info">
                    <i class="fa-solid fa-address-book"></i>
                    <div class="inputbox">
                        <input type="text" name="nombre" required="requiered" >
                        <span class="text">nombre de usuario</span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="info">
                    <i class="fas fa-envelope"></i>
                    <div class="inputbox">
                        <input type="text" name="correo" required="requiered">
                        <span class="text">correo electronico</span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="info">
                    <i class="fas fa-lock"></i>
                    <div class="inputbox">
                        <input type="password" name="contrasenia" id="contraseña" required="requiered">
                        <span class="text">contraseña</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="mostrar">
                <label for="mostrarContraseña" class="toggle-label">
                    <input type="checkbox" id="mostrarContraseña" onchange="hacerVisibleContraseña()">
                    <i id="Icono" class="far fa-eye"></i>
                    mostrar contraseña
                </label>
            </div>
            <div class="links">
                <input class="envio" type="submit" value="Iniciar sesión" name="enviar">
            </div>
    </form>
    <script src="js/mostrarpassword.js"></script>
</body>
</html> 