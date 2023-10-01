<?php
    include "conexion.php";
    $nombre=$_POST["nombre"];
    $descripcion= $_POST["descripcion"];
    $precio= $_POST["precio"];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $sql = "INSERT INTO producto (nombre, descripcion, precio, imagen) VALUES ('$nombre', '$descripcion', '$precio', '$imagen')";
    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header("Location: ../bienvenido.php");
    }else {
        echo "No se insertaron los datos";
    }