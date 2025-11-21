<?php
    //session_start sirve para iniciar la sesión
    session_start();

    //lo que hace este IF es comprobar si es que esta la variable $_SESSION['nombre'], que es el nombre de usuario

    if (isset($_SESSION['nombre'])) {
        //si encuentra que el usuario inicio sesión entonces incluye el archivo de "headusuario"
        include_once('headusuario.php');
    }else {
        //si no lo encuentra entonces incluye el archivo de "headinvitado" 
        include_once('headinvitado.php');
    }
?>
<head>
    <title>Login</title>
</head>
<body>
<?php
    //incluye el archivo de "ContenidoInicio"
    include_once('ContenidoLogin.php');
?>
<?php
    //incluye el foot para cerrar correctamente la etiqueta "<body>" y "<html>"
    include_once('foot.php');
?>