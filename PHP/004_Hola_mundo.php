<?php
    //Variabre
    $nombre = 'Ezequiel';
    //Mostrar nombre
    echo 'Hola mundo, mi nombre es: '.$nombre . "<br>";
    //phpinfo();
    //constantes
    define('PI',3.1416);
    define('NOMBRE', 'Ezequiel');
    define('APEIDO','Espinoza');
    echo PI."<br>";
    echo NOMBRE."<br>";
    echo APEIDO;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ezequiel</title>
</head>
<body>
    <h1>Pagina web de Ezequiel</h1>
    <h1><?php echo 'Hola '.$nombre ?></h1>
</body>
</html>