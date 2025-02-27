<?php
require_once __DIR__ . '/../../functions.php';
$config = getConfig();
$slug = $_GET['slug'] ?? '';
$post = getPost($slug);
if (!$post) {
    header('Location: /');
    exit;
}
$adjacentPosts = getPreviousNextPosts($slug);
?>