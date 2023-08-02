<?php   session_start(); //crear reanudar
    if (isset($_SESSION['usuario'])) {
        header('Location: contenido.php');
        die();
    }else {
        header('Location: registrate.php');
    }
?>