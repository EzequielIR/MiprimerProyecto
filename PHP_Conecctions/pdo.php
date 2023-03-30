<?php
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=primero','root','');

        $resultado = $conexion->query("SELECT * FROM usuario");

        foreach ($resultado as $fila) {
            echo $fila['id'].".- ".$fila['nombre']."<br />";
        }
    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
?>