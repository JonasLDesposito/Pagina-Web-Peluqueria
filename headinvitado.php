<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilo css -->
    <link rel="stylesheet" type="text/css" href="css/pagina.css?v=<?php echo time(); ?>">

    <!-- FontAwesome para agregar iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" >

    <!-- Agrega Icono a la pagina -->
    <link rel="icon" href="">
</head>
<body>
    <div class="contenedor">
        <nav class="nav-main">
            <img src="css/img/logo.png" alt="logo" class="logo">

            <ul class="navigation-menu">
                <li><a href="index.php"><i class="fas fa-house"></i>inicio</a></li>
                <li id="paneladmin"><a href="paneladministrador.php"><i class="fa-solid fa-toolbox"></i></i>panel de administrador</a></li>
                <li id="login"><a href="login.php"><i class="fas fa-user-plus"></i>Log in</a></li>
            </ul>

            <button class="menu-btn">
                <i class="fas fa-bars"></i>
            </button>
        </nav>