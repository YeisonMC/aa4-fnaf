<?php
$servername= 'bds_registro'; 
$username= 'root';
$password= '12345';
$bdname= 'bds_registro';     

$con= new mysqli($servername,$username, $password, $bdname);

if($con -> connect_error){
    die('ERROR DE CONEXIÓN: ' . $con->connect_error);
}

$usuario= $_POST['usuario'];
$nombre= $_POST['nombre'];
$numero= $_POST['numero'];
$contrasena= $_POST['contrasena'];
$correo= $_POST['correo'];

$contrasenaEncriptado= password_hash($contrasena, PASSWORD_DEFAULT);

$sql= "INSERT INTO registro (usuario, nombre, numero, contrasena, correo) VALUES('$usuario','$nombre',
'$numero','$contrasenaEncriptado','$correo')";

if($con ->query($sql)=== TRUE){
    echo 'Usuario reistrado satisfactoriamente';
}else{
    echo '¡ERROR! No se pudo registrar los datos';
}
$con-> close();

?>