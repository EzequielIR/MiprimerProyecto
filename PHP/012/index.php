<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/inicio.css">
    <title>Inicio</title>
</head>
<video src="video/fondo.mp4" autoplay loop muted style="
    position: fixed;/*Pocicion de video*/
    min-width: 100%;/*Tamaño minimo de video ancho*/
    min-height: 100%;/*Tamano miniomo de video largo*/
    top: 50%;/*Pocicion de video arriba*/
    left: 50%;/*Pocicion de video izquierda*/
    transform: translateX(-50%) translateY(-50%);/*Mover el video hacia los vordes*/
    z-index: -1;/*Pocicion de video de fondo con eje z*/">
</video>

<body>
    <center>
        <section>
            <h1>Iniciar seción</h1>
            <texto>Usuario: </texto><input type="text" name="User">
            <hr style="height: 5px;border:0px">
            <texto>Contraseña: </texto><input type="password" name="password">
            <hr style="height: 5px;border:0px">
            <form name="form" action="index.php">
                <button type="submit" name="inicia">Iniciar seción</button>
                <button type="submit" name="user">Agregar Usuario</button>
            </form>
            <?php
            if (isset($_REQUEST['inicia'])) {
                // index.php 
                header("Location: examen.php");
                exit();
            }
            if (isset($_REQUEST['user'])) {
                header("Location: newuser.php");
                exit();
            }
            ?>
        </section>
    </center>
</body>

</html>