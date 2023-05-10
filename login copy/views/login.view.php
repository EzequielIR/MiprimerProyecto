<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">Iniciar Sesión</h1>
        <hr class="border">

        <form class="formulario" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input class="usuario" type="text" name="usuario" placeholder="Usuario">
            </div>

            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input class="password_btn" type="password" name="password" placeholder="Password">
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div>
            Registrate

            <?php if (!empty($errores)): ?>
                <div class="error">
                    <ul>
                        <?php echo $errores ?>
                    </ul>
                </div>
            <?php endif; ?>
        </form>

        <p class="texto-registrate">
            ¿Aún no tienes una cuenta?
            <a href="registrate.php">Registrate</a>
        </p>
</body>
</html>