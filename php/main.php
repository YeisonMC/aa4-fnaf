<!-- Yeissen -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $textarea = $_POST['textarea'];
    $destino = '73966769@certus.edu.pe';

    //Asunto de correo
    $asunto = 'Opiniones de nuestros usuarios:';

    //Diseñamos el cuerpo del mensaje 
    $cuerpo = "Opinión: " . $textarea . "\n";
    
    //Envio de correo con los datos 
    if (mail($destino,$asunto,$cuerpo)){
        echo '<h1 style="color: green; font-weight: bold;">Mensaje enviado 😱😱</h1>';
    } else{
        echo "Error 😠";
    }
}
?>