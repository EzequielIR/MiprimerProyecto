<html>
    <h1>Datos de la base</h1>
<html>
<?php
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=primero','root','');

        $resultado = $conexion->query("SELECT * FROM usuario");

        foreach ($resultado as $fila) {
            echo $fila['id'].".- ".$fila['nombre']."<br />";
        }
        ?>
        <html>
            <hr>
            <h1>BETWEEN 2-3</h1>
        </html>
        <?php
        $res = $conexion->query("SELECT * FROM usuario where id BETWEEN 2 AND 3;");

        foreach ($res as $fila) {
            echo $fila['id'].".- ".$fila['nombre']."<br />";
        }

        ?>
        <html>
            <hr>
            <h1>LIKE E%</h1>
        </html>
        <?php
        $res = $conexion->query("SELECT * FROM usuario where nombre like 'E%';");

        foreach ($res as $fila) {
            echo $fila['id'].".- ".$fila['nombre']."<br />";
        }

    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
?>
