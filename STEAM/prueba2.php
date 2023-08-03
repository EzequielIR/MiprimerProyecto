<!DOCTYPE html>
<html>
<head>
    <title>Galería de imágenes y videos de Steam</title>
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

        // Mostrar título del juego
        echo '<h1>' . $game_info['name'] . '</h1>';

        // Mostrar galería de imágenes
        if (isset($game_info['screenshots']) && !empty($game_info['screenshots'])) {
            echo '<h2>Imágenes:</h2>';
            foreach ($game_info['screenshots'] as $screenshot) {
                echo '<img src="' . $screenshot['path_full'] . '" alt="Captura de pantalla">';
            }
        } else {
            echo '<p>No hay imágenes disponibles para este juego.</p>';
        }

        // Mostrar galería de videos
        if (isset($game_info['movies']) && !empty($game_info['movies'])) {
            echo '<h2>Videos:</h2>';
            foreach ($game_info['movies'] as $video) {
                echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $video['id'] . '" frameborder="0" allowfullscreen></iframe>';
            }
        } else {
            echo '<p>No hay videos disponibles para este juego.</p>';
        }
    } else {
        echo '<p>No se encontró información para el juego con ID ' . $appId . '</p>';
    }
} else {
    echo '<p>No se ha especificado un ID de juego válido.</p>';
}
?>
</body>
</html>
