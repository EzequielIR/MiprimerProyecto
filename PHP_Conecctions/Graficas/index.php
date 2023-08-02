<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $sexo = $_POST['sexo'];
    $periodo = $_POST['periodo'];
    $año = $_POST['año'];

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=bd_servicio_social', 'root', '');
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }

    $statement = $conexion->prepare(
        'SELECT COUNT(*) AS Total, carreras.carrera FROM alumno 
        RIGHT JOIN carreras ON alumno.id_carrera = carreras.id_carrera 
        JOIN expediente ON expediente.id_alumno = alumno.id_alumno 
        JOIN periodos ON expediente.id_periodo = periodos.id_periodo 
        WHERE alumno.id_sexo = :sexo 
            && periodos.periodo = :periodo
            && periodos.año = :anio
        GROUP BY carreras.carrera'
    );

    $statement->execute(array(':sexo' => $sexo, ':periodo' => $periodo, ':anio' => $año));
    $resultado = $statement->fetchAll();
    if ($sexo == '1') {
        $nombre = "Servicio Social de Hombres en $periodo del año $año." ;
    } else {
        $nombre = "Servicio Social de Mujeres en $periodo del año $año." ;
    }

    // Crear un array para almacenar los datos
    $data = array(
        array('Carrera', 'Total'),
        array('Ingeniería Informática', 0),
        array('Ingeniería en Gestión Empresarial', 0),
        array('Ingeniería en innovación agrícola sustentable', 0),
        array('Ingeniería Industrial', 0),
        array('Ingeniería en Sistemas Computacionales', 0)
    );

    // Iterar sobre los resultados y agregarlos al array
    foreach ($resultado as $row) {
        if ($row['carrera'] == 'Ingeniería Informática') {
            $data[1][1] = intval($row['Total']);
        }
        if ($row['carrera'] == 'Ingeniería en Gestión Empresarial') {
            $data[2][1] = intval($row['Total']);
        }
        if ($row['carrera'] == 'Ingeniería en innovación agrícola sustentable') {
            $data[3][1] = intval($row['Total']);
        }
        if ($row['carrera'] == 'Ingeniería Industrial') {
            $data[4][1] = intval($row['Total']);
        }
        if ($row['carrera'] == 'Ingeniería en Sistemas Computacionales') {
            $data[5][1] = intval($row['Total']);
        }
    }

    // Convertir los datos a formato JSON
    $data_json = json_encode($data, JSON_UNESCAPED_UNICODE);

    // Imprimir el script de Google Charts
    echo "
    <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
    <script type='text/javascript'>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var jsonData = " . $data_json . ";

            var data = new google.visualization.arrayToDataTable(jsonData);

            var options = {
                title: '$nombre',
                legend: { position: 'none' },
                histogram: { bucketSize: 1 }
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));

            chart.draw(data, options);
        }
    </script>
    ";

    // Imprimir el contenedor del gráfico
    echo "<div id='chart_div' class='grafica' ></div>";
}
require 'views/index.views.php';
?>