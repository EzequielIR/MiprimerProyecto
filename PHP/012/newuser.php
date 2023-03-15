<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/form.css">
    <link rel="shortcut icon" href="img/inst.png">
    <title>Registro de usuarios</title>
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
            <h1>Agregar usuario</h1>
            <form action="muestra.php" method="post">
                <campo>Nombre: </campo>
                <input name="nomb" type="search" placeholder="nombre">
                <hr style="border: 0px; width:100%">
                <campo>Apellido paterno: </campo>
                <input name="apeP" type="text" placeholder="apellido paterno">
                <hr style="border: 0px; width:100%">
                <campo>Apellido materno: </campo>
                <input name="apeM" type="text" placeholder="apellido materno">
                <hr style="border: 0px; width:100%">
                <campo>Fecha de nacimiento: </campo>
                <input name="fecha" type="date">
                <hr style="border: 0px; width:100%">
                <campo>Correo: </campo>
                <input name="mail" type="text">
                <hr style="border: 0px; width:100%">
                <campo>Telefono: </campo>
                <input name="telefono" type="tel">
                <hr style="border: 0px; width:100%">
                <campo>Url de perfil persanalizada: </campo>
                <input name="link" type="url" placeholder="https://www.chorrillos_militar_ejemplo.mx" style="width: 210px; text-align: center">
                <hr style="border: 1px; width:100%">
                <campo>Tipo de usuario: </campo>
                <select name="tipo">
                    <option selected="Alumno">Alumno</option>
                    <option selected="Maestro">Maestro</option>
                </select>
                <hr style="border: 1px; width:100%">
                <campo>Año: </campo>
                <select name="year">
                    <?php
                        for ($i=0; $i < 24; $i++) { 
                            ?><option selected="year"><?php echo ($i+2000); ?></option><?php
                        }
                    ?>
                </select>
                <hr style="border: 1px; width:100%">
                <button type="submit" >Enviar</button>
            </form>
        </section>
    </center>
</body>

</html>