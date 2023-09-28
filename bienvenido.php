<?php
session_start();
if(!isset($_SESSION['usuario'])){
    session_destroy();
    echo '
    <script>
    alert("Ususario inexistente, por favor inicie sesion o registrese");
    window.location = "index.php";
    </script>';
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/mistilos.css">
    <title>Lista de productos</title>
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
            <li><a class="active" href="menuStore.php">Volver</a></li>
            <li><a href="">Añadir nuevo producto</a></li>
            <li><a href="">Sobre nosotros</a></li>
            <li><a href="php/cerrar_session.php">CERRAR SESION</a></li>
        </ul>
    </nav>
<div>
    <h1>Productos</h1>

    <div class="espacio-tabla">
    <table class="table table-dark table-striped">
        <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Precio</th>
    </tr>
    </thead>
    <tbody>
        <?php
        $resul=mysqli_query($conexion, "SELECT * FROM productos");
        while($mostrar=mysqli_query($resul)){
        ?>
    <tr>
        <th>1<?php echo $mostrar['id']?></th>
        <th>1<?php echo $mostrar['nombre']?></th>
        <th>1<?php echo $mostrar['descripcion']?></th>
        <th>1<?php echo $mostrar['precio']?></th>
        <th>1<?php echo $mostrar['creado']?></th>
    </tr>
    <?php
    }
    ?>
    </tbody>
</table>
</div>
</body>
</html>