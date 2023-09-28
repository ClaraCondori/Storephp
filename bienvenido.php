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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Lista de productos</title>
</head>
<body>
<div>
        <header class="enca">
            <div>
                <div>
                STORE
                </div>
        <nav>
        <ul class="nav justify-content-end">
        <li class="nav-item">
        <a class="nav-link active" href="registrar_prod.php">NUEVO PRODUCTO</a>
        </li>
        <li class="nav-item">
    <a class="nav-link" href="php/cerrar_session.php">CERRAR SESION</a>
    </li>
</ul>
        </nav>
        </div>
        </header>
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