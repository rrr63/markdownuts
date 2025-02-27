<?php
require_once __DIR__ . '/../../functions.php';
$staticPages = getPost(null, 'page');
$config = getConfig();
$requestedSlug = isset($_GET['slug']) ? $_GET['slug'] : 'about';

if (!isset($staticPages[$requestedSlug])) {
    header('Location: /');
    exit;
}

$currentPage = $staticPages[$requestedSlug];
$sitemapFile = 'sitemap.xml';
?>