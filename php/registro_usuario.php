<?php
include ('conexion.php');
$nombre= $_POST['nombre'];
$correo= $_POST['correo'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$contraseña= hash('sha512', $contraseña);
$consulta="INSERT INTO usuarios (nombre, correo, usuario, password) VALUES ('$nombre', '$correo', '$usuario', '$contraseña')";
$verificar= mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
if(mysqli_num_rows($verificar) > 0){
    echo '
    <script>
    alert("DATO DUPLICADO, intente otra vez");
    window.location = "../index.php";
    </script>';
    exit();
}
$verificar_usu= mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
if(mysqli_num_rows($verificar_usu) > 0){
    echo '
    <script>
    alert("DATO DUPLICADO, intente otra vez");
    window.location = "../index.php";
    </script>';
    exit();
}
$resultado = mysqli_query($conexion, $consulta);
if($resultado){
    echo '
    <script>
    alert("usuario registrado");
    window.location = "../index.php";
    </script>';
} else{
    echo '
    <script>
    alert("error");
    window.location = "../index.php";
    </script>';
}
mysqli_close($conexion);
?>