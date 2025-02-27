<?php
/**
 * Template pour l'affichage d'une page statique
 * 
 * Ce fichier est appelé par le routeur (cli-server-routing.php) lorsqu'une URL de type /page/[slug] est demandée
 * Il inclut les fichiers de template suivants :
 * - design/page/start.php : Initialisation (chargement des données de la page)
 * - design/page/head.php : En-tête HTML et métadonnées
 * - design/partials/header.php : En-tête du site
 * - design/page/main.php : Contenu principal de la page
 * - design/partials/footer.php : Pied de page
 */

include 'design/page/start.php';
include 'design/page/head.php';
include 'design/partials/header.php';
include 'design/page/main.php';
include 'design/partials/footer.php';
?>