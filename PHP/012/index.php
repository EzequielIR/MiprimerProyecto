<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/inicio.css">
    <title>Inicio</title>
    <link rel="shortcut icon" href="img/inst.png">
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
            <form name="form" action="index.php" method="post">
                <h1>Iniciar seción</h1>
                <texto>Usuario: </texto><input type="text" name="usuario">
                <hr style="height: 5px;border:0px">
                <texto>Contraseña: </texto><input type="password" name="pas">
                <hr style="height: 5px;border:0px">
                <button type="submit" name="inicia">Iniciar seción</button>
                <button type="submit" name="user">Agregar Usuario</button>
            </form>
            <br>
            <texto style="font-size:20px;color:aliceblue">
                Accede con:
            </texto>
            <hr>
            <div class="inicio">
                <a title="Inicia con google" href="https://accounts.google.com/" target="_blank"><img src="img/gogle.png" alt="Google" /></a>
                <a title="Inicia con facebook" href="https://www.facebook.com/" target="_blank"><img src="img/face.png" alt="Facebook" /></a>
                <a title="Inicia con apple" href="https://www.icloud.com/" target="_blank"><img src="img/aple.png" alt="Apple" /></a>
                <a title="Inicia con instagram" href="https://www.instagram.com/" target="_blank"><img src="img/insta.png" alt="Instagram" /></a>
            </div>
            <?php
            if (isset($_REQUEST['inicia'])) {
                // index.php 
                $user = $_POST['usuario'];
                $psswd = $_POST['pas'];
                if ($user == 'admin' && $psswd == '12345') {
                    header("Location: examen.php");
                    exit();
                } else {
                    echo "<h1>Usuario o Contraseña incorrecta intente de nuevo</h1>";
                }
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