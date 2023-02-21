<?php
#Variables.............
#Constantes
#Arreglos asociaviativos
#Arreglos multidimencionales (5 dimenciones)..................
#Numero de elementos de un arreglo............
#Recorrer areglos mediante elementos de un arreglo foreach
#Ordenar arreglos
#Condicional if
#Operacionales
#Switch
#Condicional corto
#Ciclo for............
#ciclo while

#Alumnos
#Ezequiel: 1
#Roberto: 2
#Alverto: 3
#Archivaldo: 4
#Alfredo: 5
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
</head>
<body>
<?php
    $alumno = array (
        array(
            array(
                array(
                    array(
                        20,21,23,22,21
                    )
                ,'19224002','19224010','19224011','19224012','19224013')
            ,'Rodriguez','Guzman','Castillo','Ramirez','Guzman')
        ,'Espinoza','Hernandez','Gonzales','Salazar','Ramirez')
    ,'Ezequiel','Roberto','Alverto','Archivaldo','Alfredo');
    
    $materia = array ('Esp','Mat','CN','EF','FCE');

    $esp = array ('Esp',9,8,5,7,9);
    $matr = array('Mat',6,7,5,8,10);
    $cien = array('CN',7,8,5,6,10);
    $edu = array('EF',9,8,5,10,8);
    $form = array('FCE',8,6,5,10,9);

    $contar = count($alumno)."<br>";
    
    for($i=1;$i <= (intval($contar)-1);$i++){
        echo 'Nombre:'.$alumno[$i].' ';
        echo $alumno[0][$i].' ';
        echo $alumno[0][0][$i]."<br />";
        echo 'Numero de control: '.$alumno[0][0][0][$i]."<br />";
        echo 'Edad: '.$alumno[0][0][0][0][($i-1)]."<br />";
        $conter=1;
        foreach($materia as $nmat){
            echo $nmat.': ';
            while ($a <= 10) {
                # code...
            }
        }
        echo "<br>";
    }
?>
</body>
</html>