<?php
    #Ejemplo arreglo con dias de la semana
    $semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
    $semana[8]='Ezequiel';
    $semana[3]='Isidoro';

    #En los arregos podemos guardar cualquier tipo de datos
    $arreglo = array ('Cadenas de texto',1,array('asd',123),true);

    #Ejemplo mostrar arreglo semana
    echo $semana[0]."<br />";
    echo $semana[1]."<br />";
    echo $semana[2]."<br />";
    echo $semana[3]."<br />";
    echo $semana[4]."<br />";
    echo $semana[5]."<br />";
    echo $semana[6]."<br />";
    echo $semana[8]."<br />";
    echo '--------------------------------------------------------------------------------------------'."<br />";

    $amigos = array (
        array('Hugo',20),
        array('Paco',21),
        array('Luis',18),
    );
    echo $amigos[0][0]."<br />";
    echo $amigos[1][0]."<br />";
    echo $amigos[2][0]."<br />";
?>