<?php
session_start();

$servername = 'localhost';
$username = 'root';
$password = '12345';
$bdname = 'bds_registro';

$con = new mysqli($servername, $username, $password, $bdname);

if ($con->connect_error) {
    die('Error de conexión: ' . $con->connect_error);
}

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT id, contrasena FROM usuario WHERE usuario = '$usuario'";
$resultado = $con->query($sql);

if ($resultado->num_rows === 1) {
    $fila = $resultado->fetch_assoc();
    $contrasenaEncriptada = $fila['contrasena'];
    
    if (password_verify($contrasena, $contrasenaEncriptada)) {
        $_SESSION['id'] = $fila['id'];
        echo 'OK';
    } else {
        echo 'Contraseña incorrecta';
    }
 else {
    echo 'usuario no encontrado';
}
}

$con->close();
?>
