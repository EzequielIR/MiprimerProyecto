<?php
    $Nombre = 'Ezequiel';
    $Num = 3;
    $bool = true;
    $floo = 1.1;
    define('year',2001);
    define('NOMBRE', 'Ezequiel');
    define('APEIDO','Espinoza');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "CONSTANTES"."<br>";
        echo NOMBRE."<br>";
        echo APEIDO."<br>";
        echo year."<br>";
        echo "VARIABLES"."<br>";
        echo "Nombre = $Nombre"."<br>";
        echo "Numero = $Num"."<br>";
        echo "Boleano = $bool"."<br>";
        echo "Decimal = $floo"."<br>";
        $Nombre = 'Isidoro';
        $Num = 6;
        $bool = false;
        $floo = 2.2;
        echo "CAMBIO"."<br>";
        echo "Nombre = $Nombre"."<br>";
        echo "Numero = $Num"."<br>";
        echo "Boleano = $bool"."<br>";
        echo "Decimal = $floo"."<br>";
    ?>
</body>
</html>