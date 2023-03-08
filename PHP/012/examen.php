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
define('Ezequiel', 1);
define('Roberto', 2);
define('Alverto', 3);
define('Archivaldo', 4);
define('Alfredo', 5);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css" type="text/css">
    <title>Examen</title>
</head>
<video src="fondo.mp4" autoplay loop muted></video>
<center>
    <figure>
        <img src="inst.png" alt="Logo escuela">
        <figcaption>Escuela de chorrillos militar</figcaption>
    </figure>
</center>

<body>
    <center>
        <hr style="border: 1px; width:100%">
        <nav style="font-size:50px">Clase 1A</nav>
        <hr style="border: 1px; width:100%">
        <?php

        #Arreglo asociativo
        $ponderacionmaterias = array('Practicas' => '15%', 'Investigacion' => '15%', 'Participacion' => '10%', 'Examen' => '60%');

        #Imprecion de arreglo asociativo
        #imprimir variables definidas
        echo '<section class="lista">'
            . '<h1>';
        echo print_r($ponderacionmaterias);
        echo '</h1>'
            . '<hr style="border:3px solid black;width:100%"><h2><pre>'
            . 'Lista de clases:' . '<br />'
            . Ezequiel . '.-Ezequiel<br />'
            . Roberto . '.-Roberto<br />'
            . Alverto . '.-Alverto<br />'
            . Archivaldo . '.-Archivaldo<br />'
            . Alfredo . '.-Alfredo<br />' .
            '</pre></h2></section>';

        ?>
        <aside>
            <div class="links">
                <h1>Enlaces:</h1>
                <ol>
                    <li><a href="ex2.php" target="_blank">Información</a></br></li>
                    <li><a href="ex2.php" target="_self">Materias</a></br></li>
                    <li><a href="ex2.php" target="_parent">Avisos</a></br></li>
                    <li><a href="ex2.php" target="_top">Contacto</a></br></li>
                </ol>
                </br>
                <hr style="border:3px solid black;width:100%">
                <h1>Acerca de la escuela</h1>
                <article>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum molestias accusamus molestiae autem hic dolor nam neque sed enim dolore ut laudantium quo, optio quam eaque a vitae sunt.
                    Asperiores fuga eius veritatis, consequatur labore blanditiis dolorum qui fugit nostrum magnam minus laborum aliquam et culpa placeat quis neque impedit nihil praesentium dicta ipsum. Eos harum repellat eum? Saepe!
                    Aliquid odio rem suscipit dolor ipsam mollitia est cupiditate laborum reiciendis fugit molestias explicabo soluta quae laudantium magnam inventore, libero architecto veritatis quam, aut omnis ea assumenda! Quaerat, ratione placeat.
                    Qui architecto sunt asperiores harum ullam consequuntur eligendi similique ex fugiat aliquam est, in quas distinctio necessitatibus sapiente, earum odio libero culpa perspiciatis quasi iste a rerum! Dicta, corporis quisquam.
                    Culpa ea debitis pariatur quis accusamus aut laudantium accusantium molestiae sunt explicabo ipsum numquam exercitationem sint, commodi atque eaque cupiditate quidem magnam sequi amet maiores? Sequi necessitatibus laudantium atque quam.
                    Eaque iusto saepe voluptates laudantium dolor non consequatur doloremque blanditiis excepturi. Et assumenda quos libero. Excepturi consectetur minima earum deleniti harum quas sunt magnam! Impedit vero maxime eveniet ducimus voluptatibus?
                </article>
                </br>
            </div>
        </aside>
        <?php
        #Arreglo muntidimencional
        $alumno = array(
            array(
                array(
                    array(
                        array(
                            20, 21, 23, 22, 21
                        ), '19224002', '19224010', '19224011', '19224012', '19224013'
                    ), 'Rodriguez', 'Guzman', 'Castillo', 'Ramirez', 'Guzman'
                ), 'Espinoza', 'Hernandez', 'Gonzales', 'Salazar', 'Ramirez'
            ), 'Ezequiel', 'Roberto', 'Alverto', 'Archivaldo', 'Alfredo'
        );

        #Arreglos
        $numtel = array(4871053694, null, 4879012456, null, 4874390235);

        $materia = array('Esp', 'Mat', 'CN', 'EF', 'FCE');
        $promgen = array();
        $promedio = array();

        $esp = array('Esp', 9, 8, 5, 7, 9);
        $matr = array('Mat', 6, 7, 5, 8, 10);
        $cien = array('CN', 7, 8, 5, 6, 10);
        $edu = array('EF', 9, 8, 5, 10, 8);
        $forma = array('FCE', 8, 6, 5, 10, 9);

        #variable y contar arreglo
        $contar = 0;
        $contar = count($alumno) . "<br>";

        #Ciclo for imprimir info. alumnos
        for ($i = 1; $i <= (intval($contar) - 1); $i++) {
        ?>
            <div class="Container">
                <?php

                #Condicional corto para comprovar si existe un numero telefonico
                $numtel[$i - 1] = (isset($numtel[$i - 1])) ? $numtel[$i - 1] : 'S/N';
                echo 'Nombre completo : ' . $alumno[$i] . ' ';
                echo $alumno[0][$i] . ' ';
                echo $alumno[0][0][$i] . ".<br />";
                echo 'Numero de control: ' . $alumno[0][0][0][$i] . ".<br />";
                echo 'Numero telefonico: ' . $numtel[$i - 1] . ".<br />";
                echo 'Edad: ' . $alumno[0][0][0][0][($i - 1)] . ".<br />";

                #Variable e imprecion de calificación de materias
                $cal = 0;
                foreach ($materia as $nmat) {
                    echo $nmat . ': ';
                    #switch para comprovar de que materia es la calificación
                    switch ($nmat) {
                        case $esp[0]:
                            echo $esp[$i] . '. ';
                            $promedio[$cal] = $esp[$i];
                            break;
                        case $matr[0]:
                            echo $matr[$i] . '. ';
                            $promedio[$cal] = $matr[$i];
                            break;
                        case $cien[0]:
                            echo $cien[$i] . '. ';
                            $promedio[$cal] = $cien[$i];
                            break;
                        case $edu[0]:
                            echo $edu[$i] . '. ';
                            $promedio[$cal] = $edu[$i];
                            break;
                        case $forma[0]:
                            echo $forma[$i] . '. ';
                            $promedio[$cal] = $forma[$i];
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
                $promgen[($i - 1)] = ($prom / $cal) . '.-' . $alumno[$i] . ' ' . $alumno[0][$i] . ' ' . $alumno[0][0][$i];
                echo "<br>" . 'Promdeio: ' . ($prom / $cal) . '.<br />';

                #Condicional para comprovar si es aprovado o reprovado
                if (($prom / $cal) >= 6) {
                    echo 'Estado: Aprobado.' . '<br />';
                } else {
                    echo 'Estado: Reprovado.' . '<br />';
                }
                ?>
            </div>
        <?php
        }
        ?>
        <hr style="border: 1px; width:100%">
        <div class="prom">
            <?php
            #Ordenar Promedios de mayor a menor e imprecion con ciclo foreach
            rsort($promgen);
            echo '<h2>Promedios:<h2/><ol>';
            foreach ($promgen as $imp) {
                echo '<li>' . $imp . '</li>';
            }
            ?>
        </div>
        <hr style="border: 1px; width:100%">
        <form action="ex2.php" method="post">
            <button type="submit">Buscar</button>
        </form>
        <hr style="border: 1px; width:100%">
        <blockquote cite="https://twitter.com/olikeka/status/785554206648365056">
            <p>
                "Vive como si fueses a morir mañana. Aprende como si fueses a vivir siempre"
            </p>
            <p style="color:blue;">— Mahatma Gandhi</p>
        </blockquote>
        <hr style="border: 1px; width:100%">
        <footer>
            <p>
            <h1>Acerca de la pagina</h1>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus reiciendis repellat maiores mollitia, ipsa sit corrupti, obcaecati sint fuga dolorum temporibus voluptatum, eius at repudiandae nulla ipsum molestias minus facere.
            Vitae quisquam cumque praesentium animi libero ipsa sapiente dolor eum ab blanditiis minus soluta impedit natus, dignissimos enim culpa veritatis eos harum! Deleniti quibusdam aperiam esse voluptatem ex maiores quae?
            <br>By <autor style="font-weight: bold;color:blue">Ezequiel Isidoro Espinoza Rodriguez</autor>
            </p>
        </footer>
    </center>
</body>

</html>