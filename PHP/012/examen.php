<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/estilo.css" type="text/css">
    <link rel="shortcut icon" href="img/inst.png">
    <title>Bienvenido</title>
</head>
<?php
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
<video src="video/fondo.mp4" autoplay loop muted style="
    position: fixed;/*Pocicion de video*/
    min-width: 100%;/*Tamaño minimo de video ancho*/
    min-height: 100%;/*Tamano miniomo de video largo*/
    top: 50%;/*Pocicion de video arriba*/
    left: 50%;/*Pocicion de video izquierda*/
    transform: translateX(-50%) translateY(-50%);/*Mover el video hacia los vordes*/
    z-index: -1;/*Pocicion de video de fondo con eje z*/
"></video>
<nav>
    <et2>
        <img src="img/inst.png" alt="Logo escuela" style="width:70px;height:70px">
    </et2>
    <et2>
        &nbsp; Clase 1A: &nbsp;
    </et2>
    <et1>
        <h1><a href="ex2.php" target="_blank">Home</a></h1>
    </et1>
    <et1>
        <form action="ex2.php" method="get">
            <h1>
                <titulo><i>Buscar Alumno: </i></titulo>
                <input type="text" name="nombre">
                <button type="submit">Buscar</button>
            </h1>
        </form>
    </et1>
    <et1>
        <h1><a href="index.php" target="_top">Cerrar seción</a></h1>
    </et1>
</nav>
<center>
    <figure>
        <hr style="height: 50px;border:0px">
        <img src="img/inst.png" alt="Logo escuela" style="width:250px;height:250px">
        <figcaption><b>Escuela de chorrillos militar</b></figcaption>
    </figure>
</center>

<body>
    <center>
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
                <h1><U>Acerca de la escuela</U></h1>
                <article>
                    <em>Lorem ipsum dolor sit amet, consectetur</em> adipisicing elit. Voluptatem rerum molestias accusamus molestiae autem hic dolor nam neque sed enim dolore ut laudantium quo, optio quam eaque a vitae sunt.
                    Asperiores fuga eius veritatis, consequatur labore blanditiis dolorum qui fugit nostrum magnam minus laborum aliquam et culpa placeat quis neque impedit nihil praesentium dicta ipsum. Eos harum repellat eum? Saepe!
                    Aliquid odio rem suscipit dolor ipsam mollitia est cupiditate laborum reiciendis fugit molestias explicabo soluta quae laudantium magnam inventore, libero architecto veritatis quam, aut omnis ea assumenda! Quaerat, ratione placeat.
                    Qui architecto sunt asperiores harum ullam consequuntur eligendi similique ex fugiat aliquam est, in quas distinctio necessitatibus sapiente, earum odio libero culpa perspiciatis quasi iste a rerum! Dicta, corporis quisquam.
                    Culpa ea debitis pariatur quis accusamus aut laudantium accusantium molestiae sunt explicabo ipsum numquam exercitationem sint, commodi atque eaque cupiditate quidem magnam sequi amet maiores? Sequi necessitatibus laudantium atque quam.
                    Eaque iusto saepe voluptates laudantium dolor non consequatur doloremque blanditiis excepturi. Et assumenda quos libero. Excepturi consectetur minima earum deleniti harum quas sunt magnam! Impedit vero maxime eveniet ducimus voluptatibus?
                </article>
                </br>
            </div>
            <video autoplay loop muted src="video/lol.mp4" style="width:250px;height:150px"></video>
            <nombreM>
                <audio controls src="audio/ChillDa.mp3" style="width:90%;height:100px"></audio>
                <strong>LAKEY INSPIRED - Chill Day</strong>
            </nombreM>
            <nombreM>
                <audio controls src="audio/AC.mp3" style="width:90%;height:100px"></audio>
                <strong>Aerolínea Carrillo - T3R Elemento</strong>
                <hr style="border:0px">
            </nombreM>
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
        <hr style="border: 0px">
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
        <blockquote cite="https://twitter.com/olikeka/status/785554206648365056">
            <p>
                <big>"Vive como si fueses a morir mañana. Aprende como si fueses a vivir siempre"</big>
            </p>
            <p style="color:blue;"><small>— Mahatma Gandhi</small></p>
        </blockquote>
        <hr style="border: 1px; width:100%">
        <footer>
            <p>
            <h1>Acerca de la pagina</h1>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus reiciendis repellat maiores mollitia, ipsa sit corrupti, obcaecati sint fuga dolorum temporibus voluptatum, eius at repudiandae nulla ipsum molestias minus facere.
            Vitae quisquam cumque praesentium animi libero ipsa sapiente dolor eum ab blanditiis minus soluta impedit natus, dignissimos enim culpa veritatis eos harum! Deleniti quibusdam aperiam esse voluptatem ex maiores quae?
            <br><code>By</code> <autor style="font-weight: bold;color:blue">Ezequiel Isidoro Espinoza Rodriguez</autor>
            </p>
            <br>
        </footer>
    </center>
</body>

</html>