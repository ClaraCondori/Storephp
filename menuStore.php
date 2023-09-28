<?php
session_start();
if(!isset($_SESSION['usuario'])){
    echo '
    <script>
    alert("Ususario inexistente, por favor inicie sesion o registrese");
    window.location = "index.php";
    </script>';
    session_destroy();
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Almacen</title>
    <link rel="stylesheet" href="assets/css/mistilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a href="" class="enlace">
            <img src="assets/images/logo.png" alt="" class="logo">
        </a>
        <ul>
            <li><a class="active" href="bienvenido.php">Nuestros productos</a></li>
            <li><a href="">Añadir nuevo producto</a></li>
            <li><a href="">Sobre nosotros</a></li>
            <li><a href="php/cerrar_session.php">CERRAR SESION</a></li>
        </ul>
    </nav>
    <section>
        
    </section>
</body>
</html>