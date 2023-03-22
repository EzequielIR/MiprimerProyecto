<?php
$errores = '';
$enviado = '';

//comprobamos que el formulario haya sido enviado
if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    //Comprobamos que nombre no este vacio
    if (!empty($nombre)) {
        //Sanitizar el nombre para eliminar caracteres que no deberian estar
        //filter_var(preg_replace("([^a-z|^A-Z])", "", htmlentities($fe)));
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        //comprobamos que el nombre no quede vacio despues de sanitizar
        if ($nombre == "") {
            $errores .= 'Por favor ingresa un nombre.<br/>';
        }
    } else {
        $errores .= 'Por favor ingresa un nombre.<br/s>';
    }

    if (!empty($correo)) {
        $correo = filter_var($correo,FILTER_SANITIZE_EMAIL);
        //Comprobamos que sea un correo valido
        if (!filter_var($correo,FILTER_VALIDATE_EMAIL)) {
            $errores.= "Por favor ingresa un correo valido.<br/>";
        }
    }else {
        $errores.= 'Por favor ingresa un correo.<br/>';
    }

    if (!empty($mensaje)) {
        //Podermos sanitizar con filter var
        //Comvertir signos del mensaje en entidades HTML
        $mensaje = htmlspecialchars($mensaje);
        //Elimina tabs, space, \n, null, tab vertical, retorno de carro
        $mensaje = trim($mensaje);
        //barras invertidas
        $mensaje = stripslashes($mensaje);
    }else {
        $errores.= 'Por favor ingresa el mensaje.<br/>';
    }

    //Comprovamos si hay errores antes de enviar
    if (!$errores) {
        $destino = $correo;
        $asunto = 'Correo enviado desde miPagina.com';
        $mensaje = 'Mensaje: '.$_POST['mensaje'];
        $headers = "From: eezequiel260@gmail.com";
        mail($destino,$asunto,$mensaje,$headers);
        $enviado = 'true';
        
    }
}

require 'index.view.php';

?>