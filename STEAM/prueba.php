    <?php

    if (empty($bus)) {

        // Si no está definida, asignarle un valor
        $bus = $_GET['query'];

        // Obtener la clave de API de Steam
        $apiKey = '3FD9BDCD4B0A34A5984EC05827408F16';

        // Preparar la URL de la API de búsqueda
        $query = urlencode($bus);
        $url = "https://api.steampowered.com/ISteamApps/GetAppList/v2/";

        // Realizar la solicitud a la API de Steam
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        // Mostrar los resultados de búsqueda
        foreach ($data['applist']['apps'] as $app) {
            if (strpos($app['name'], $query) !== false) {
                $busqueda[] = ['appid' => $app['appid']];
            }
        }
    }

    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

    $postPorPagina = 10;

    $inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

    $cantidad_elementos = count($busqueda);

    $numeroPaginas = ceil($cantidad_elementos / $postPorPagina);

    require 'prueba.view.php';
    ?>