<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <title>Formulario de Contacto</title>
</head>

<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre:" value="<?php if (!$enviado && isset($nombre)) {
                                                                                                                echo $nombre;
                                                                                                            } ?>">

            <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo:" value="<?php if (!$enviado && isset($correo)) {
                                                                                                                echo $correo;
                                                                                                            } ?>">

            <textarea type="text" class="form-control" name="mensaje" id="mensaje"><?php if (!$enviado && isset($mensaje)) {
                                                                                        echo $mensaje;
                                                                                    } ?></textarea>

            <?php if (!empty($errores)) { ?>
                <div class="alert error" role="alert">
                    <?php echo $errores; ?>
                </div>
            <?php } elseif ($enviado) { ?>
                <div class="alert success" role="alert">
                    <?php echo 'Enviado Correctamente'; ?>
                </div>
            <?php } ?>
            <center>
                <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
            </center>
        </form>
    </div>
</body>

</html>