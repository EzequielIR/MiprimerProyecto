<?php 
    $mes ='JUNIO';
    $mes = (isset($mes))?$mes:"El usuario no establecio un valor";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes</title>
</head>
<body>
    <?php
    echo'<h1>'.$mes.'</h1>';
    switch ($mes) {
        case 'DICIEMBRE':
            echo'<h1>FELIZ NAVIDAD</h1>';
            break;
        
        case 'ENERO':
            echo'<h1>FELIZ AÑO NUEVO</h1>';
            break;

        case 'MAYO':
            echo'<h1>FELIZ DIA MÁMA</h1>';
            break;
        
        default:
        echo'<h1>El MES QUE INGRESASTE NO TIENE DIA FESTIVO</h1>';
    }
    ?>
</body>
</html>