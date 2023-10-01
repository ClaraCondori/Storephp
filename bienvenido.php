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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
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
            <li><a href="php/cerrar_session.php">CERRAR SESION</a></li>
        </ul>
    </nav>
    <div class="container">
        <br>
        <center>
            <H1>Listado de productos</H1>
        </center>
        <br>
        <div class="container">

            <a href="nuevoproducto.php" class="btn btn-dark">Agregar Producto</a>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "php/conexion.php";
                    $Sql = "SELECT * FROM producto";
                    $resultado = $conexion->query($Sql);

                    while ($Fila = $resultado->fetch_assoc()) { ?>

                        <tr>
                            <th scope="row"><?php echo $Fila['id']?></th>
                            <td><?php echo $Fila['nombre']?></td>
                            <td><?php echo $Fila['descripcion']?></td>
                            <td><?php echo $Fila['precio']?></td>
                            <td><img style="width: 200px;" src="data:image/jpg;base64,<?php echo base64_encode($Fila['imagen'])?>" alt=""></td>
                            <td>
                                <a href="php/editar.php?id=<?php echo $Fila["id"]?>" class="btn btn-warning">Editar</a>
                                <a href="php/eliminar.php?id=<?php echo $Fila["id"]?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                </tbody>
            <?php } ?>
            </table>
        </div>

    </div>
</body>
</html>