<?php
error_reporting(1);
include "conexion.php";
$Id = $_REQUEST['idEditar'];
$Nombre = $_POST['nombre'];
$Descripcion = $_POST['descripcion'];
$Precio = $_POST['precio'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$sql = "UPDATE producto SET 
nombre = '$Nombre', 
descripcion = '$Descripcion',
precio = '$Precio',
imagen = '$imagen' WHERE id = $Id";
$resultado = $conexion->query($sql);

if ($resultado) {
    header("Location:../bienvenido.php");
}else {
    echo "No se insertaron lod datos";
}