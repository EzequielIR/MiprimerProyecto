<?php $mes ='ENERO';?>

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
        if($mes == 'DICIEMBRE'){
            echo'<h1>FELIZ NAVIDAD</h1>';
        }elseif($mes=='ENERO'){
            echo'<h1>FELIZ AÑO NUEVO</h1>';
        }
        elseif($mes=='MAYO'){
            echo'<h1>FELIZ DIA MÁMA</h1>';
        }else{
            echo'<h1>El MES QUE INGRESASTE NO TIENE DIA FESTIVO</h1>';
        }
    ?>
</body>
</html>