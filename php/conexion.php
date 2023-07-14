<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "bds_registro";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los valores del formulario (usuario y contraseña)
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

// Consulta SQL para verificar si existe el usuario y la contraseña
$sql = "SELECT * FROM registro WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
$result = $conn->query($sql);

// Verificar si se encontró un resultado
if ($result->num_rows > 0) {
    // Usuario y contraseña válidos
    header("location: index.php");
    echo "Acceso concedido";
} else {
    // Usuario o contraseña incorrectos
    echo "<div class='alert alert-danger'>Acceso denegado</div>";
}

// Cerrar la conexión
$conn->close();
?>