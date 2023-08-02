<?php
    $Host = "localhost";
    $User = "root";
    $Pass = "";
    $DB = "bd_servicio_social";
    

    $Con = mysqli_connect($Host, $User, $Pass, $DB) or die ("Problema al conectar");
           mysqli_select_db($Con,$DB) or die ("Problema al conectar BD");

?>