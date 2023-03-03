<?php
    $meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre',
    'Octubre','Noviembre','Diciembre');
?>
<!-- Listas ordenada y desordenada ul-ol multiplicacion *-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Meses del año</h1>
    <ul>
        <?php
            #foreach
            foreach($meses as $mes){
                echo '<li>'.$mes.'</li>';
            }
        ?>
    </ul>
</body>
</html>