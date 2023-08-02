<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Style.css">
    <title>Grafica</title>
</head>
<body>
    <form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="campo">
            <h1>GENERAR GRAFICA</h1>
        </div>
        <div class="campo">
            <b>Sexo: </b>
            <input type="radio" name="sexo" value="1" checked> Hombre
            <input type="radio" name="sexo" value="2"> Mujer
        </div>
        <div class="campo">
            <b>Periodo:</b>
            <select id="periodo" name="periodo">
                <option value="ENERO-JUNIO">ENERO-JUNIO</option>
                <option value="AGOSTO-DICIEMBRE">AGOSTO-DICIEMBRE</option>
            </select>
        </div>
        <div class="campo">
            <b>Año: </b>
            <input type="text" name="año" value="2023">
        </div>
        <div class="campo">
            <button type="submit" name="inicia">Buscar</button>
        </div>
    </form>
</body>

</html>