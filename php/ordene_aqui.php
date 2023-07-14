<!-- Yeissen -->
<?php
if ($_SERVER['REQUEST_METHOD']==='POST'){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $locales = $_POST['locales'];
    $tipo = $_POST['tipo'];
    $promocion = $_POST['promocion'];
    $destino = 'gbarboza.es@gmail.com';

    //Asunto de correo
    $asunto='Nombre de cliente: ' . $nombre;

    //Diseñamos el cuerpo del mensaje 
    $cuerpo = "Nombre: " . $nombre . "\n";
    $cuerpo.= "Correo: " . $email . "\n";
    $cuerpo.= "Número: " . $tel . "\n";
    $cuerpo.= "Local: " . $locales . "\n";
    $cuerpo.= "Tipo de Pizza: " . $tipo . "\n";
    $cuerpo.= "Adicional y Promoción: " . $promocion . "\n";

    if(mail($destino, $asunto, $cuerpo)){
        echo "El mensaje se a enviado satisfactoriamente 😱";
    }else{
        echo "Erros no se pudo enviar tu mensaje 😠";
    }
 }
?>