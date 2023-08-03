<!DOCTYPE html>
<html>
<head>
    <title>Información del juego en Steam</title>
</head>
<body>
<?php
if (isset($_GET['appid'])) {
    $appId = $_GET['appid'];

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
        echo '<h1>' . $game_info['name'] . '</h1>';
        echo '<p>' . $game_info['short_description'] . '</p>';
        echo '<p>Desarrollador: ' . $game_info['developers'][0] . '</p>';
        echo '<p>Editor: ' . $game_info['publishers'][0] . '</p>';
        echo '<p>Precio: ' . $game_info['price_overview']['final_formatted'] . '</p>';
        echo "<img src='$game_info[header_image]' alt='$game_info[short_description]'></img>";
        echo '<p>Descripción: ' . $game_info['detailed_description'].'</p>';

        // También puedes mostrar más información, como capturas de pantalla, videos, estadísticas, etc.
    } else {
        echo '<p>No se encontró información para el juego con ID ' . $appId . '</p>';
    }
} else {
    echo '<p>No se ha especificado un ID de juego válido.</p>';
}
?>
</body>
</html>
