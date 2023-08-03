<!DOCTYPE html>
<html>

<head>
    <title>Resultados de búsqueda en Steam</title>
</head>

<body>>
    <?php
    if (isset($_GET['query'])) {
        // Obtener la clave de API de Steam
        $apiKey = '3FD9BDCD4B0A34A5984EC05827408F16';

        // Preparar la URL de la API de búsqueda
        $query = urlencode($_GET['query']);
        $url = "https://api.steampowered.com/ISteamApps/GetAppList/v2/";

        // Realizar la solicitud a la API de Steam
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        // Mostrar los resultados de búsqueda
        echo '<h2>Resultados de búsqueda:</h2>';
        foreach ($data['applist']['apps'] as $app) {
            if (strpos($app['name'], $query) !== false) {
                $appId = $app['appid'];

                // Obtener la clave de API de Steam
                $apiKey = '3FD9BDCD4B0A34A5984EC05827408F16';

                // Preparar la URL para obtener información del juego
                $url_game_info = "https://store.steampowered.com/api/appdetails?appids=" . $appId;

                // Realizar la solicitud a la API de Steam para obtener información del juego
                $response_game_info = file_get_contents($url_game_info);
                $data_game_info = json_decode($response_game_info, true);

                // Verificar si la solicitud fue exitosa y si hay datos disponibles
                if ($data_game_info[$appId]['success'] and !empty($data_game_info)) {
                    $game_info = $data_game_info[$appId]['data'];
                    if (!empty($game_info['header_image']) && !empty($game_info['short_description']) && !empty($game_info['price_overview']['final_formatted'])) {
                        // Mostrar información adicional del juego
                        echo "<hr><img src='$game_info[header_image]' alt='$game_info[short_description]'></img></br>";
                        echo '<h1>' . $game_info['name'] . '</h1></br>';
                        echo '<p>Precio: ' . $game_info['price_overview']['final_formatted'] . '</p></br>';
                    }

                    // También puedes mostrar más información, como capturas de pantalla, videos, estadísticas, etc.
                }
            }
        }
    }
    ?>
</body>

</html>