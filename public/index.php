<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rtrim($uri, '/');
if ($uri === '') {
    $uri = '/';
}

$routes = [
    '/' => 'home',
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
    require __DIR__ . '/../app/pages/' . $page . '.php';
} else {
    http_response_code(404);
    echo '404 — страница не найдена';
}