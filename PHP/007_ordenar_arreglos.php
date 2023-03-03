<?php
    $numeros = array(8,5,9,1,7,3,0,4);

    sort($numeros);
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
<h1>Numeros</h1>
    <ul>
        <?php
            #foreach
            foreach($numeros as $num){
                echo '<li>'.$num.'</li>';
            }
            echo '<h1>Cambio</h1>';
            rsort($numeros);
            foreach($numeros as $num){
                echo '<li>'.$num.'</li>';
            }
        ?>
    </ul>
</body>
</html>