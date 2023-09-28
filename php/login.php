<?php
session_start();
include ('conexion.php');
$correo= $_POST['correo'];
$password= $_POST['pass'];
$password= hash('sha512', $password);
$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo= '$correo' AND password = '$password'");
    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario']=$correo;
        header("location: ../menuStore.php");
        exit();
    }else{
        echo '
    <script>
    alert("Ususario inexistente, intente otra vez");
    window.location = "../index.php";
    </script>';
    exit();
    }
?>