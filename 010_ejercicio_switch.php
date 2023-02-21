<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motor</title>
</head>
<body>
    <?php
    $motor = 4;
    $motor = (isset($motor))?$motor:0;
    echo'<h1>Usted selecciono el motor: '.$motor.'</h1>';
    switch ($motor) {
        case 0:
            echo'<h1>NO A ESTABLECIDO UN VALOR DEFINIDO PARA EL TIPO DE BOMBA</h1>';
            break;
        
        case 1:
            echo'<h1>LA BOMBA ES UNA BOMBA DE AGUA</h1>';
            break;

        case 2:
            echo'<h1>LA BOMBA ES UNA BOMBA DE GASOLINA</h1>';
            break;
        
        case 3:
            echo'<h1>LA BOMBA ES UNA BOMBA DE HORMIGÓN</h1>';
            break;
            
        case 4:
            echo'<h1>LA BOMBA ES UNA BOMBA DE PASTA ALIMENTICIA</h1>';
            break;

        default:
        echo'<h1>NO EXISTE UN VALOR VALIDO PARA TIPO DE BOMBA</h1>';
    }
    ?>
</body>
</html>