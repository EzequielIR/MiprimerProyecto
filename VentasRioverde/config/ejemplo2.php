<?php
    require 'persona.php';

    $perso = new Persona;
    $perso->nombre='Ezequiel';
    $perso->estatura="1.70 metros";

    $perso->mostrarInformacion();
?>