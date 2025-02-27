<?php
/**
 * Template pour l'affichage d'un article individuel
 * 
 * Ce fichier est appelé par le routeur (cli-server-routing.php) lorsqu'une URL de type /post/[slug] est demandée
 * Il inclut les fichiers de template suivants :
 * - design/posts/start.php : Initialisation (chargement des données de l'article)
 * - design/posts/head.php : En-tête HTML et métadonnées
 * - design/partials/header.php : En-tête du site
 * - design/posts/main.php : Contenu principal de l'article
 * - design/partials/footer.php : Pied de page
 */

include 'design/posts/start.php';
include 'design/posts/head.php';
include 'design/partials/header.php';
include 'design/posts/main.php';
include 'design/partials/footer.php';
?>