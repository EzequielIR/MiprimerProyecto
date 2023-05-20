<?php
    session_start();

    if (isset($_SESSION['usuario'])) {
        header('Location: index.php');
        die();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
        $password = $_POST['password'];
    }

    $errores = '';

    if (empty($usuario) or empty($password)) {
        $errores = '<li>Por favor rellena todos los datos correctamente<li>';
    } else {
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=login', 'root', '');
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password');
        $statement->execute(array(':usuario' => $usuario, ':password' =>$password));

        $resultado = $statement->fetch();

        if ($resultado !== false) {
            $_SESSION['usuario'] = $usuario;
            header('Location: index.php');
        } else {
            $errores = '<li>Datos incorrectos<li>';
        }
    }
    require 'views/login.view.php';
?>