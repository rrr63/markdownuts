<?php

$type = $_GET['type'] ?? 'post';
$templateDir = match($type) {
    'page' => 'page',
    'tag' => 'tag',
    default => 'posts'
};

include "design/{$templateDir}/start.php";
include "design/{$templateDir}/head.php";
include 'design/partials/header.php';
include "design/{$templateDir}/main.php";
include 'design/partials/footer.php';
?>
