<?php
include 'Conexión/BD.php';
//Configuración de la sesión

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="Design.css">
    <link rel="shortcut icon" href="Images/logo_ss.png">
    <script src="js/particles.js"></script>
    <title>Tablero</title>
</head>

<body>
    <div id="sidemenu" class="menu-expanded">
        <div id="header">
            <div id="title"><span>Menú</span></div>
            <div id="menu-btn">
                <div class="btn-ham"></div>
                <div class="btn-ham"></div>
                <div class="btn-ham"></div>
            </div>
        </div>

        <div id="profile">
            <div id="photo"><img src="Images/perfil.jpg" alt=""></div>
            <div id="name"><span><?php echo "azalia.moya" ?></span></div>
        </div>

        <div id="menu-items">
            <div class="item">
                <a href="Inicio.php">
                    <div title="Tablero" class="icon"><img src="Images/icono0.png" alt=""></div>
                    <div class="title"><span></span>Tablero</div>
                </a>
            </div>
            <hr>
            <div class="item">
                <a href="Modulos/Expediente/CatalogoEx.php">
                    <div title="Expediente" class="icon"><img src="Images/icono1.png" alt=""></div>
                    <div class="title"><span></span>Expediente</div>
                </a>
            </div>
            <div class="item">
                <a href="Modulos/Estudiantes/CatalogoE.php">
                    <div title="Estudiantes" class="icon"><img src="Images/icono2.png" alt=""></div>
                    <div class="title"><span></span>Estudiantes</div>
                </a>
            </div>
            <div class="item">
                <a href="Modulos/Empresas/CatalogoEp.php">
                    <div title="Empresas" class="icon"><img src="Images/icono3.png" alt=""></div>
                    <div class="title"><span></span>Empresas</div>
                </a>
            </div>
            <div class="item">
                <a href="Modulos/Areas/CatalogoAe.php">
                    <div title="Áreas de empresas" class="icon"><img src="Images/icono4.png" alt=""></div>
                    <div class="title"><span></span>Áreas de empresas</div>
                </a>
            </div>
            <div class="item">
                <a href="Modulos/ProgramaSS/CatalogoPSS.php">
                    <div title="Programa SS" class="icon"><img src="Images/icono5.png" alt=""></div>
                    <div class="title"><span></span>Programa del servicio social</div>
                </a>
            </div>
            <div class="item">
                <a href="Modulos/Calificaciones/CatalogoC.php">
                    <div title="Calificaciones" class="icon"><img src="Images/icono6.png" alt=""></div>
                    <div class="title"><span></span>Calificaciones</div>
                </a>
            </div>
            <div class="item">
                <a href="Modulos/Pagos/CatalogoP.php">
                    <div title="Pagos" class="icon"><img src="Images/icono7.png" alt=""></div>
                    <div class="title"><span></span>Pagos</div>
                </a>
            </div>
            <div class="item">
                <a href="Modulos/Archivos/CatalogoA.php">
                    <div title="Archivos" class="icon"><img src="Images/icono8.png" alt=""></div>
                    <div class="title"><span></span>Archivos</div>
                </a>
            </div>
            <hr>
            <div class="item">
                <a href="Modulos/Configuracion/CatalogoCf.php">
                    <div title="Configuración" class="icon"><img src="Images/icono9.png" alt=""></div>
                    <div class="title"><span></span>Configuración</div>
                </a>
            </div>
            <div class="item">
                <a href="Sesion/Cerrar.php">
                    <div title="Cerrar sesión" class="icon"><img src="Images/Cerrar.png" alt=""></div>
                    <div class="title"><span></span>Cerrar sesión</div>
                </a>
            </div>
        </div>
    </div>

    <div id="main-container">

        <header id="Head" class="Head-expanded">
            <div class="logo-1">
                <a href="Inicio.php"><img src="Images/logo_ssl.png" alt="" class="logo"></a>
            </div>
            <h1>Tablero</h1>
            <div class="Buscar">
                <?php
                $Periodo = "";
                $Anio = date("Y");
                $Mes = date("n");

                if (!empty($_POST['Periodo'])) {
                    $Periodo = $_POST['Periodo'];
                } else {
                    if ($Mes >= 1 && $Mes <= 6) {
                        $Periodo = "ENERO-JUNIO";
                    } else if ($Mes >= 7 && $Mes <= 12) {
                        $Periodo = "AGOSTO-DICIEMBRE";
                    }
                }
                ?>
                <form class="BuscarF" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="octavo" id="">
                    <select class="BB" name='Periodo' onchange='submit();'>
                        <option value="<?php echo $Periodo; ?>"><?php echo $Periodo ?></option>
                        <option value="ENERO-JUNIO">ENERO-JUNIO</option>
                        <option value="AGOSTO-DICIEMBRE">AGOSTO-DICIEMBRE</option>
                    </select>
                    <div type="submit" value="" class="BuscarB"><img src="Images/Filter.png" alt="Calendario"></div>
                </form>
            </div>
        </header>

        <div class="contenedor">
            <div class="db">
                <div class="db-child1">Total de alumnos</div>
                <div class="db-child2">
                    <?php
                    $Registro = mysqli_query($Con, "SELECT COUNT(*) AS Total FROM expediente JOIN periodos ON expediente.id_periodo=periodos.id_periodo 
                    WHERE periodos.periodo='$Periodo' && periodos.año=$Anio") or die("Problema al consultar: " . mysqli_error($Con));
                    $Reg = mysqli_fetch_array($Registro);
                    $Total = $Reg['Total'];
                    echo $Total;
                    ?>
                </div>
            </div>
            <div class="db">
                <div class="db-child1">Total de empresas</div>
                <div class="db-child2">
                    <?php
                    $Registro = mysqli_query($Con, "SELECT COUNT(DISTINCT empresas.nombre_e) AS Total FROM expediente JOIN alumno ON expediente.id_alumno=alumno.id_alumno JOIN periodos ON expediente.id_periodo=periodos.id_periodo JOIN empresas ON expediente.id_empresa=empresas.id_empresa 
                    WHERE periodos.periodo='$Periodo' && periodos.año=$Anio") or die("Problema al consultar: " . mysqli_error($Con));
                    $Reg = mysqli_fetch_array($Registro);
                    $Total = $Reg['Total'];
                    echo $Total;
                    ?>
                </div>
            </div>
            <div class="db">
                <div class="db-child1">Recuento de hombres</div>
                <div class="db-child2">
                    <?php
                    $Registro = mysqli_query($Con, "SELECT COUNT(*) AS Total FROM expediente JOIN alumno ON expediente.id_alumno=alumno.id_alumno JOIN periodos ON expediente.id_periodo=periodos.id_periodo 
                    WHERE alumno.id_sexo=1 && periodos.periodo='$Periodo' && periodos.año=$Anio") or die("Problema al consultar: " . mysqli_error($Con));
                    $Reg = mysqli_fetch_array($Registro);
                    $Total = $Reg['Total'];
                    echo $Total;
                    ?>
                </div>
            </div>
            <div class="db">
                <div class="db-child1">Recuento de mujeres</div>
                <div class="db-child2">
                    <?php
                    $Registro = mysqli_query($Con, "SELECT COUNT(*) AS Total FROM expediente JOIN alumno ON expediente.id_alumno=alumno.id_alumno JOIN periodos ON expediente.id_periodo=periodos.id_periodo 
                    WHERE alumno.id_sexo=2 && periodos.periodo='$Periodo' && periodos.año=$Anio") or die("Problema al consultar: " . mysqli_error($Con));
                    $Reg = mysqli_fetch_array($Registro);
                    $Total = $Reg['Total'];
                    echo $Total;
                    ?>
                </div>
            </div>
        </div>
        <div class="contenedor">
            <div class="gf">
                <div class="db-child1">Alumnos por áreas de servicio social</div>
                <div class="db-child2">
                    <?php
                    $Registro = mysqli_query($Con, "SELECT areas_empresas.area as 'Nombre_area', COUNT(alumno.id_alumno) as 'Total' 
                            FROM empresas 
                            JOIN areas_empresas ON areas_empresas.id_area = empresas.id_area
                            JOIN expediente ON empresas.id_empresa = expediente.id_empresa
                            JOIN alumno ON expediente.id_alumno = alumno.id_alumno
                            JOIN periodos ON expediente.id_periodo = periodos.id_periodo
                            WHERE periodos.periodo = '$Periodo' AND periodos.año = '$Anio'
                            GROUP BY areas_empresas.area") or die("Problema al consultar: " . mysqli_error($Con));

                    $pastel_rows = array();
                    $pastel_table = array();
                    $pastel_table['cols'] = array(
                        array('label' => 'Nombre_area', 'type' => 'string'),
                        array('label' => 'Total', 'type' => 'number')
                    );
                    foreach ($Registro as $p) {
                        $pastel_temp = array();
                        $pastel_temp[] = array('v' => (string) $p['Nombre_area']);
                        $pastel_temp[] = array('v' => (int) $p['Total']);
                        $pastel_rows[] = array('c' => $pastel_temp);
                    }
                    $pastel_table['rows'] = $pastel_rows;
                    $pastel_jsonTable = json_encode($pastel_table, JSON_UNESCAPED_UNICODE);
                    ?>
                    <html>

                    <head>
                        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
                        <script type="text/javascript">
                            google.load('visualization', '1', {
                                packages: ["corechart"]
                            });
                            google.setOnLoadCallback(drawChart);

                            function drawChart() {
                                var data = new google.visualization.DataTable(<?= $pastel_jsonTable ?>);
                                var options = {
                                    legend: {
                                        position: 'labeled'
                                    },
                                    is3D: true
                                };
                                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                chart.draw(data, options);
                            }
                        </script>
                        <div id="piechart" style="width: 100%; height: 85%;"></div>
                    </head>


                    </html>
                </div>
            </div>
            <div class="c1">
                <div class="c2">
                <div class="db-child1">Hombres por carrera</div>
                    <div class="db-child2">

                        <?php
                        $Registro = mysqli_query($Con, "SELECT COUNT(*) AS Total, carreras.abreviatura AS Carrera 
                        FROM alumno RIGHT JOIN carreras ON alumno.id_carrera = carreras.id_carrera 
                        JOIN expediente ON expediente.id_alumno = alumno.id_alumno 
                        JOIN periodos ON expediente.id_periodo = periodos.id_periodo 
                        WHERE alumno.id_sexo = 1 && periodos.periodo = '$Periodo' && periodos.año = '$Anio' 
                        GROUP BY carreras.abreviatura;") or die("Problema al consultar: " . mysqli_error($Con));

                        $barra_rows = array();
                        $barra_table = array();
                        $barra_table['cols'] = array(
                            array('label' => 'Carrera', 'type' => 'string'),
                            array('label' => 'Total', 'type' => 'number')
                        );
                        foreach ($Registro as $H) {
                            $barra_temp = array();
                            $barra_temp[] = array('v' => (string) $H['Carrera']);
                            $barra_temp[] = array('v' => (int) $H['Total']);
                            $barra_rows[] = array('c' => $barra_temp);
                        }
                        $barra_table['rows'] = $barra_rows;
                        $barra_jsonTable = json_encode($barra_table, JSON_UNESCAPED_UNICODE);
                        ?>
                        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
                        <script type="text/javascript">
                            google.load('visualization', '1', {
                                packages: ["corechart"]
                            });
                            google.setOnLoadCallback(drawChart);

                            function drawChart() {
                                var data = new google.visualization.DataTable(<?= $barra_jsonTable ?>);
                                var options = {
                                    legend: {
                                        position: 'none'
                                    },
                                    colors: ['#32CD32'],
                                    vAxes: {
                                        0: {
                                            title: 'Hombres',
                                            titleTextStyle: {
                                                fontSize: 15,
                                                fontName: 'Arial',
                                            }
                                        }
                                    },
                                    hAxis: {
                                        title: 'Carreras'
                                    },
                                };

                                var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
                                chart.draw(data, options);
                            }
                        </script>
                        <center><div id="chart_div" style="width: 100%; height: 85px;"></div></center>
                    </div>

                    <div class="c2">
                    <div class="db-child1">Mujeres por carrera</div>
                        <div class="db-child2">
                            <?php
                            $Registro = mysqli_query($Con, "SELECT COUNT(*) AS Total, carreras.abreviatura AS Carrera 
                        FROM alumno RIGHT JOIN carreras ON alumno.id_carrera = carreras.id_carrera 
                        JOIN expediente ON expediente.id_alumno = alumno.id_alumno JOIN periodos ON expediente.id_periodo = periodos.id_periodo 
                        WHERE alumno.id_sexo = 2 && periodos.periodo = '$Periodo' && periodos.año = '$Anio' 
                        GROUP BY carreras.abreviatura;") or die("Problema al consultar: " . mysqli_error($Con));

                            $barra2_rows = array();
                            $barra2_table = array();
                            $barra2_table['cols'] = array(
                                array('label' => 'Carrera', 'type' => 'string'),
                                array('label' => 'Total', 'type' => 'number')
                            );
                            foreach ($Registro as $M) {
                                $barra2_temp = array();
                                $barra2_temp[] = array('v' => (string) $M['Carrera']);
                                $barra2_temp[] = array('v' => (int) $M['Total']);
                                $barra2_rows[] = array('c' => $barra2_temp);
                            }
                            $barra2_table['rows'] = $barra2_rows;
                            $barra2_jsonTable = json_encode($barra2_table, JSON_UNESCAPED_UNICODE);
                            ?>
                            <html>
                            <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
                            <script type="text/javascript">
                                google.load('visualization', '1', {
                                    packages: ["corechart"]
                                });
                                google.setOnLoadCallback(drawChart);

                                function drawChart() {
                                    var data = new google.visualization.DataTable(<?= $barra2_jsonTable ?>);
                                    var options = {
                                        legend: {
                                            position: 'none'
                                        },
                                        colors: ['#FF8C00'],
                                        vAxes: {
                                            0: {
                                                title: 'Mujeres',
                                                titleTextStyle: {
                                                    fontSize: 15, // Tamaño de la fuente del título del eje horizontal
                                                    fontName: 'Arial', // Nombre de la fuente del título del eje horizontal
                                                }
                                            },
                                        },
                                        hAxis: {
                                            title: 'Carreras',

                                        },
                                    };
                                    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div2'));
                                    chart.draw(data, options);
                                }
                            </script>
                            <center><div id="chart_div2" style="width: 100%; height: 90px;"></div></center>

                            </html>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contenedor">
                <div class="db2">
                    <div class="db-child1">Alumnos de IND</div>
                    <div class="db-child2">
                        <?php
                        $Registro = mysqli_query($Con, "SELECT COUNT(*) AS Total FROM expediente JOIN alumno ON expediente.id_alumno=alumno.id_alumno JOIN periodos ON expediente.id_periodo=periodos.id_periodo 
                    WHERE alumno.id_carrera=4 && periodos.periodo='$Periodo' && periodos.año=$Anio") or die("Problema al consultar: " . mysqli_error($Con));
                        $Reg = mysqli_fetch_array($Registro);
                        $Total = $Reg['Total'];
                        echo $Total;
                        ?>
                    </div>
                </div>
                <div class="db2">
                    <div class="db-child1">Alumnos de IIAS</div>
                    <div class="db-child2">
                        <?php
                        $Registro = mysqli_query($Con, "SELECT COUNT(*) AS Total FROM expediente JOIN alumno ON expediente.id_alumno=alumno.id_alumno JOIN periodos ON expediente.id_periodo=periodos.id_periodo 
                    WHERE alumno.id_carrera=3 && periodos.periodo='$Periodo' && periodos.año=$Anio") or die("Problema al consultar: " . mysqli_error($Con));
                        $Reg = mysqli_fetch_array($Registro);
                        $Total = $Reg['Total'];
                        echo $Total;
                        ?>
                    </div>
                </div>
                <div class="db2">
                    <div class="db-child1">Alumnos de IGE</div>
                    <div class="db-child2">
                        <?php
                        $Registro = mysqli_query($Con, "SELECT COUNT(*) AS Total FROM expediente JOIN alumno ON expediente.id_alumno=alumno.id_alumno JOIN periodos ON expediente.id_periodo=periodos.id_periodo 
                    WHERE alumno.id_carrera=2 && periodos.periodo='$Periodo' && periodos.año=$Anio") or die("Problema al consultar: " . mysqli_error($Con));
                        $Reg = mysqli_fetch_array($Registro);
                        $Total = $Reg['Total'];
                        echo $Total;
                        ?>
                    </div>
                </div>
                <div class="db2">
                    <div class="db-child1">Alumnos de ISC</div>
                    <div class="db-child2">
                        <?php
                        $Registro = mysqli_query($Con, "SELECT COUNT(*) AS Total FROM expediente JOIN alumno ON expediente.id_alumno=alumno.id_alumno JOIN periodos ON expediente.id_periodo=periodos.id_periodo 
                    WHERE alumno.id_carrera=5 && periodos.periodo='$Periodo' && periodos.año=$Anio") or die("Problema al consultar: " . mysqli_error($Con));
                        $Reg = mysqli_fetch_array($Registro);
                        $Total = $Reg['Total'];
                        echo $Total;
                        ?>
                    </div>
                </div>
                <div class="db2">
                    <div class="db-child1">Alumnos de IF</div>
                    <div class="db-child2">
                        <?php
                        $Registro = mysqli_query($Con, "SELECT COUNT(*) AS Total FROM expediente JOIN alumno ON expediente.id_alumno=alumno.id_alumno JOIN periodos ON expediente.id_periodo=periodos.id_periodo 
                    WHERE alumno.id_carrera=1 && periodos.periodo='$Periodo' && periodos.año=$Anio") or die("Problema al consultar: " . mysqli_error($Con));
                        $Reg = mysqli_fetch_array($Registro);
                        $Total = $Reg['Total'];
                        echo $Total;
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/menu.js" async></script>
</body>

</html>