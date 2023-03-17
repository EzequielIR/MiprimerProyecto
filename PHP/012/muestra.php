<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/form.css">
    <link rel="shortcut icon" href="img/inst.png">
    <title>Usuario nuevo</title>
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
            <?php
            $bandera = false;
            #foreach
            foreach ($_POST as $campo) {
                if (strlen($campo) == 0) {
                    $bandera = true;
                }
            }
            if ($bandera == false) {
            ?>
                <imprime>
                    <h1>Información de usuario</h1>
                    <?php
                    $nombre = $_POST['nomb'];
                    $app = $_POST['apeP'];
                    $apm = $_POST['apeM'];
                    $fe = $_POST['fecha'];
                    $co = $_POST['mail'];
                    $t = $_POST['telefono'];
                    $l = $_POST['link'];
                    $t = $_POST['tipo'];
                    $y = $_POST['year'];

                    $errores = '';

                    if (!empty($nombre)) {
                        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
                        if ($nombre == "") {
                            $errores .= 'Nombre invalido <br/>';
                        } else {
                            echo "Nombre: " . $nombre;
                            echo "<br>";
                        }
                    }
                    if (!empty($app)) {
                        $app = filter_var($app, FILTER_SANITIZE_STRING);
                        if ($app == "") {
                            $errores .= 'Apellido Paterno invalido <br/>';
                        } else {
                            echo "Apellido paterno: " . $app;
                            echo "<br>";
                        }
                    }
                    if (!empty($apm)) {
                        $apm = filter_var($apm, FILTER_SANITIZE_STRING);
                        if ($apm == "") {
                            $errores .= 'Apellido Materno invalido <br/>';
                        } else {
                            echo "Apellido materno: " . $apm = $_POST['apeM'];
                            echo "<br>";
                        }
                    }
                    if (!empty($fe)) {
                        $fe = filter_var(preg_replace("([^0-9-])", "", htmlentities($fe)));
                        if ($fe == "") {
                            $errores .= 'Fecha invalida <br/>';
                        } else {
                            echo "Fecha: ".$fe;
                            echo "<br>";
                        }
                    }
                    if (!empty($co)) {
                        $co = filter_var($co, FILTER_SANITIZE_EMAIL);
                        if (!filter_var($co, FILTER_VALIDATE_EMAIL)) {
                           echo $errores .= 'Correo invalido <br/>';
                        }
                    } else {
                        echo "Correo electronico: " . $co;
                        echo "<br>";
                    }

                    if (!empty($t)) {
                        $t = filter_var($t, FILTER_SANITIZE_NUMBER_INT);
                        if (!filter_var($t, FILTER_VALIDATE_INT)) {
                            $errores .= 'Telefono invalida: <br/>';
                        } else {
                            echo "Telefono: " . $t;
                            echo "<br>";
                        }
                    }
                    if (!empty($l)) {
                        $l = filter_var($l, FILTER_SANITIZE_URL);
                        if (!filter_var($l, FILTER_VALIDATE_URL)) {
                            $errores .= 'Url invalida: <br/>';
                        } else {
                            echo "Dirección de perfil: " . $l;
                            echo "<br>";
                        }
                    }

                    echo "Tipo se usuario: " . $t = $_POST['tipo'];
                    echo "<br>";
                    echo "Año de registro: " . $y = $_POST['year'];
                    ?>
                </imprime>
                <h1>Usuario creado con exito</h1>
                <form action="index.php">
                    <button>Inicio</button>
                </form>
            <?php
            } else {
            ?>
                <H1 style="color:red;font: size 50px;">Favor de llenar los campos correctamente</H1>
                <form action="newuser.php">
                    <button>Volver</button>
                </form>
            <?php
            }
            ?>
        </section>
    </center>
</body>
</html>