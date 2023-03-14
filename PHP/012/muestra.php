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
                if ( strlen($campo) == 0) {
                    $bandera = true;
                }
            }
            if ($bandera == false) {
            ?>
                <imprime>
                    <h1>Información de usuario</h1>
                    <?php
                    echo "Nombre: " . $nombre = $_POST['nomb'];
                    echo "<br>";
                    echo "Apellido paterno: " . $app = $_POST['apeP'];
                    echo "<br>";
                    echo "Apellido materno: " . $apm = $_POST['apeM'];
                    echo "<br>";
                    echo "Fecha: " . $fe = $_POST['fecha'];
                    echo "<br>";
                    echo "Numero: " . $nu = $_POST['numero'];
                    echo "<br>";
                    echo "Telefono: " . $t = $_POST['telefono'];
                    echo "<br>";
                    echo "Dirección de perfil: " . $l = $_POST['link'];
                    echo "<br>";
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
            }else {
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