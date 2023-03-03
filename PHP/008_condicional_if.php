<?php
$edad =17;?>
<?php
if($edad < 18){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edad</title>
</head>
<body>
    <h1>No eres mayor</h1>
    <h1>No puedes visitar el sitio</h1>
</body>
</html>
<?php
}
?>
<?php
if($edad >= 18){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edad</title>
</head>
<body>
    <h1>Bienvanido</h1>
    <h1>Adelante</h1>
</body>
</html>
<?php
}
?>