<?php
#Variables.............
#Constantes................
#Arreglos asociaviativos.......................
#Arreglos multidimencionales (5 dimenciones)..................
#Numero de elementos de un arreglo............
#Recorrer areglos mediante elementos de un arreglo foreach..............
#Ordenar arreglos......................
#Condicional if..............
#Operacionales.....................
#Switch.........................
#Condicional corto.....................
#Ciclo for...................
#ciclo while....................
#___________________________________________________________________________________________________________________________________
#Lista de alumnos
#Ezequiel = 1
#Roberto = 2
#Alverto = 3
#Archivaldo = 4
#Alfredo = 5

define('Ezequiel',1);
define('Roberto',2);
define('Alverto',3);
define('Archivaldo',4);
define('Alfredo',5);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Examen</title>
</head>
<body>
    <center>
    <img src="inst.png">
    <hr style="border:5px solid blue;width:100%">
    <h1>Clase 1A</h1>
<?php
    echo '<h1>'
        .'Lista de clases:'.'<br />'
        .Ezequiel.'.-Ezequiel<br />'
        .Roberto.'.-Roberto<br />'
        .Alverto.'.-Alverto<br />'
        .Archivaldo.'.-Archivaldo<br />'
        .Alfredo.'.-Alfredo<br />'.
    '</h1>';
    $contar = 0;
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
    
    $numtel = array(4871053694,null,4879012456,null,4874390235);

    $materia = array ('Esp','Mat','CN','EF','FCE');
    $promgen = array();
    $promedio = array();

    $esp = array ('Esp',9,8,5,7,9);
    $matr = array('Mat',6,7,5,8,10);
    $cien = array('CN',7,8,5,6,10);
    $edu = array('EF',9,8,5,10,8);
    $forma = array('FCE',8,6,5,10,9);

    $ponderacionmaterias = array('Practicas'=>'15%','Investigacion'=>'15%','Participacion'=>'10%','Examen'=>'60%');

    $contar = count($alumno)."<br>";
    echo '<hr style="border:5px solid black;width:100%">'; 
    for($i=1;$i <= (intval($contar)-1);$i++){
        ?>
        <div class="Container">
        <?php
        $numtel[$i-1] = (isset($numtel[$i-1]))?$numtel[$i-1]:'S/N';
        echo 'Nombre completo : '.$alumno[$i].' ';
        echo $alumno[0][$i].' ';
        echo $alumno[0][0][$i].".<br />";
        echo 'Numero de control: '.$alumno[0][0][0][$i].".<br />";
        echo 'Numero telefonico: '.$numtel[$i-1].".<br />";
        echo 'Edad: '.$alumno[0][0][0][0][($i-1)].".<br />";
        $cal = 0;
        foreach($materia as $nmat){
            echo $nmat.': ';
            switch ($nmat) {
                case $esp[0]:
                    echo $esp[$i].'. ';
                    $promedio[$cal]=$esp[$i];
                    break;
                case $matr[0]:
                    echo $matr[$i].'. ';
                    $promedio[$cal]=$matr[$i];
                    break;
                case $cien[0]:
                    echo $cien[$i].'. ';
                    $promedio[$cal]=$cien[$i];
                    break;
                case $edu[0]:
                    echo $edu[$i].'. ';
                    $promedio[$cal]=$edu[$i];
                    break;
                case $forma[0]:
                    echo $forma[$i].'. ';
                    $promedio[$cal]=$forma[$i];
                    break;
            }
            $cal++;
        }
        $j = 0;
        $prom = 0;
        $cal = count($promedio);
        while ($j < $cal) {
            $prom = $prom + $promedio[$j];
            $j++;
        }
        $promgen [($i-1)] = ($prom/$cal).'.-'.$alumno[$i].' '.$alumno[0][$i].' '.$alumno[0][0][$i];
        echo "<br>".'Promdeio: '.($prom/$cal).'.<br />';
        if (($prom/$cal) >= 6) {
            echo 'Estado: Aprobado.'.'<br />';
        }else {
            echo 'Estado: Reprovado.'.'<br />';
        }
        ?>
        </div>
        <?php
    }

    echo '<hr style="border:5px solid red;width:100%">';
    rsort($promgen);
    echo '<h1>Alunmos acomodados por calificación:<h1/>';
    foreach($promgen as $imp){
        echo '<li>'.$imp.'</li>';
    }
    echo '<hr style="border:5px solid red;width:100%">';

    echo '<hr style="border:5px solid green;width:100%">';
    echo "<h1>Ponderacion para las materias:<br />
    Practicas: $ponderacionmaterias[Practicas]<br />
    Investigación: $ponderacionmaterias[Investigacion]<br />
    Participación: $ponderacionmaterias[Participacion]<br />
    Examen: $ponderacionmaterias[Examen]<br /><h1/>";
    echo '<hr style="border:5px solid green;width:100%">';
?>
 <center/>
</body>
</html>