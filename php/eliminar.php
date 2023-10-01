<?php

    include "conexion.php";

    $Id = $_REQUEST['id'];

    $sql = "DELETE FROM producto WHERE id = $Id";

    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header("Location: ../bienvenido.php");
    }else {
        echo "No se elimino el dato";
    }
