<?php
function juego($appid)
{
    $appId = $appid;

    // Obtener la clave de API de Steam
    $apiKey = '3FD9BDCD4B0A34A5984EC05827408F16';

    // Preparar la URL para obtener información del juego
    $url_game_info = "https://store.steampowered.com/api/appdetails?appids=" . $appId;

    // Realizar la solicitud a la API de Steam para obtener información del juego
    $response_game_info = file_get_contents($url_game_info);
    $data_game_info = json_decode($response_game_info, true);

    // Verificar si la solicitud fue exitosa y si hay datos disponibles
    if ($data_game_info[$appId]['success']) {
        $game_info = $data_game_info[$appId]['data'];

        // Mostrar información adicional del juego
        echo "<img src='$game_info[header_image]' alt='$game_info[short_description]'></img>";
        echo '<h1>' . $game_info['name'] . '</h1>';
        if (!empty($game_info['price_overview']['final_formatted'])) {
            echo '<p>Precio: ' . $game_info['price_overview']['final_formatted'] . '</p>';
        }else {
            echo '<p>Precio no disponible</p>';
        }
        // También puedes mostrar más información, como capturas de pantalla, videos, estadísticas, etc.
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Resultados de búsqueda en Steam</title>
</head>

<body>
    <div class="contenedor">
        <h1>Artículos</h1>
        <section class="articulos">
            <ul>
                <?php
                $contador = 0;
                while ($contador < $postPorPagina) {
                    if ($contador < $cantidad_elementos) {
                        $resultado = $busqueda[($inicio + $contador)]['appid'];
                        juego($resultado);
                    }
                    $contador++;
                }
                ?>
            </ul>
        </section>

        <section class="paginacion">
            <ul>
                <?php if ($pagina == 1) : ?>
                    <li class="disabled"><a>&laquo;</a></li>
                <?php else : ?>
                    <li><a href="?query=<?php echo $bus; ?>&pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
                <?php endif; ?>

                <?php
                for ($i = 1; $i <= $numeroPaginas; $i++) {
                    if ($pagina === $i) {
                        echo "<li class='active'><a href='?query=$bus&pagina=$i'>$i</a></li>";
                    } else {
                        echo "<li><a href='?query=$bus&pagina=$i'>$i</a></li>";
                    }
                }
                ?>
                <?php if ($pagina == $numeroPaginas) : ?>
                    <li class="disabled"><a>&raquo;</a></li>
                <?php else : ?>
                    <li><a href="?query=<?php echo $bus; ?>&pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
                <?php endif; ?>
            </ul>
        </section>
    </div>
</body>

</html>