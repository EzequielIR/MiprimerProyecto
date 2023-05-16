<?php 
    if (isset($_SESSION['usuario'])) {
        header('Location: index.php');
        die();
    }
    var_dump($_POST);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
        $password = $_POST['password'];
        $passw = $_POST['password2'];

    }
    require 'views/registrate.view.php';
?>