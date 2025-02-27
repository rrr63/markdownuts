<?php
$uri = rtrim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');

$routes = [
    '/post/([^/]+)' => ['file' => 'content.php', 'param' => 'slug', 'type' => 'post'],
    '/page/([^/]+)' => ['file' => 'content.php', 'param' => 'slug', 'type' => 'page'],
    '/tag/([^/]+)' => ['file' => 'tag.php', 'param' => 'tag'],
    '/tags' => ['file' => 'tags.php', 'type' => 'tags']
];

foreach ($routes as $pattern => $route) {
    if (preg_match('#^' . $pattern . '$#', $uri, $matches)) {
        if (isset($matches[1]) && isset($route['param'])) {
            $_GET[$route['param']] = $matches[1];
        }
        if (isset($route['type'])) {
            $_GET['type'] = $route['type'];
        }
        require __DIR__ . '/../' . $route['file'];
        exit;
    }
}

if ($uri !== '' && file_exists(__DIR__ . '/../' . $uri) && !is_dir(__DIR__ . '/../' . $uri)) {
    return false;
}

if ($uri !== '') {
    header('Location: /');
    exit;
}
