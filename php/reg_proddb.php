<?php
include('conexion.php');
$nombre= $_POST['nombre'];
$descripcion= $_POST['descripcion'];
$precio= $_POST['precio'];
$fecha=$_POST['creado'];
$consulta="INSERT INTO producto (nombre, descripcion, precio, creado) VALUES ('$nombre', '$descripcion', '$precio', '$fecha');";
$resul=mysqli_query($conexion, $consulta) or die ("error de registro");
    echo 'registro exitoso';
mysqli_close($conexion);
?>