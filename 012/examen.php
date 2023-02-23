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

#Variables definidas
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
    <video class="fondocss"
        loop="loop"
        autoplay="autoplay">
            <source scr="fondo.mp4"
            type="video/mp4" />
    </video/>
    <section class="clase"><h1>Clase 1A</h1></section>
<?php
    #imprimir variables difinidas
    echo '<section class="lista"><h2>'
        .'Lista de clases:'.'<br />'
        .Ezequiel.'.-Ezequiel<br />'
        .Roberto.'.-Roberto<br />'
        .Alverto.'.-Alverto<br />'
        .Archivaldo.'.-Archivaldo<br />'
        .Alfredo.'.-Alfredo<br />'.
    '</h2></section>';

    #Arreglo asociativo
    $ponderacionmaterias = array('Practicas'=>'15%','Investigacion'=>'15%','Participacion'=>'10%','Examen'=>'60%');

    #Imprimir variables definidas
    echo '<section class="ponderacion">'."<h1>Criterios de evaluación:<br />
    Practicas: $ponderacionmaterias[Practicas]<br />
    Investigación: $ponderacionmaterias[Investigacion]<br />
    Participación: $ponderacionmaterias[Participacion]<br />
    Examen: $ponderacionmaterias[Examen]<br /><h1/></section>";

    #Arreglo muntidimencional
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

    #variable y contar arreglo
    $contar = 0;
    $contar = count($alumno)."<br>";

    #Ciclo for imprimir info. alumnos
    for($i=1;$i <= (intval($contar)-1);$i++){
        ?>
        <div class="Container">
        <?php

        #Condicional corto para comprovar si existe un numero telefonico
        $numtel[$i-1] = (isset($numtel[$i-1]))?$numtel[$i-1]:'S/N';
        echo 'Nombre completo : '.$alumno[$i].' ';
        echo $alumno[0][$i].' ';
        echo $alumno[0][0][$i].".<br />";
        echo 'Numero de control: '.$alumno[0][0][0][$i].".<br />";
        echo 'Numero telefonico: '.$numtel[$i-1].".<br />";
        echo 'Edad: '.$alumno[0][0][0][0][($i-1)].".<br />";
        
        #Variable e imprecion de calificación de materias
        $cal = 0;
        foreach($materia as $nmat){
            echo $nmat.': ';

            #switch para comprovar de que materia es la calificación
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

        #variables para ciclos
        $j = 0;
        $prom = 0;

        #Cuenta las calificaciones
        $cal = count($promedio);

        #ciclo while para calcular promedio
        while ($j < $cal) {
            $prom = $prom + $promedio[$j];
            $j++;
        }
        $promgen [($i-1)] = ($prom/$cal).'.-'.$alumno[$i].' '.$alumno[0][$i].' '.$alumno[0][0][$i];
        echo "<br>".'Promdeio: '.($prom/$cal).'.<br />';

        #Condicional para comprovar si es aprovado o reprovado
        if (($prom/$cal) >= 6) {
            echo 'Estado: Aprobado.'.'<br />';
        }else {
            echo 'Estado: Reprovado.'.'<br />';
        }
        ?>
        </div>
        <?php
    }
    ?>
        <div class="prom">
    <?php
    #Ordenar Promedios de mayor a menor e imprecion con ciclo foreach
    rsort($promgen);
    echo '<h2>Promedios:<h2/><ol>';
    foreach($promgen as $imp){
        echo '<li>'.$imp.'</li>';
    }
    ?>
        </ol></div>
    <?php
    
?>
 <center/>
</body>
</html>