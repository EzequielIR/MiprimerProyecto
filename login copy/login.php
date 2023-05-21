<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
    die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];


    $errores = '';

    if (empty($usuario) or empty($password)) {
        $errores = '<li>Por favor rellena todos los datos correctamente</li>';
    } else {
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=login', 'root', '');
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }

        $rer = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario');
        $rer->execute(array(':usuario' => $usuario));
        $wer = $rer->fetch();

        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario');
        $statement->execute(array(':usuario' => $usuario));
        
        $resultado = $statement->fetch();

        if ($resultado !== false) {
            if(password_verify($password, $wer['pass'])){
                $_SESSION['usuario'] = $usuario;
                header('Location: index.php');
            } else {
                $errores = '<li>Contraseña incorrecta</li>';
            }
        } else {
            $errores = '<li>Usuario no existe</li>';
        }
    }
}
require 'views/login.view.php';
?>