<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Bienvenue dans notre site. Nous allons vous presenter la culture albanaise &agrave; travers nos slides. Pour toute information, veuillez vous redirigez dans l'onglet Contact">
    <title>Accueil</title>
    <?php
        // Ajout des css de manière dynamique grâce à functions.php
        // Link de la doc https://developer.wordpress.org/reference/functions/wp_head/
        wp_head();
    ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand text-white" href="index.html">
            <!-- Link de la doc https://developer.wordpress.org/reference/functions/get_bloginfo/ -->
            <h1><?php echo get_bloginfo('name'); ?></h1>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barNavigation" aria-controls="barNavigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="barNavigation">
            <ul class="navbar-nav p-2">
                <li class="nav-item active">
                    <a class="nav-link rediriction" href="<?php echo get_template_directory_uri(); ?>/index.html"><h1>Accueil</h1></a>
                </li>
                <li class="nav-item">
                        <a class="nav-link rediriction" href="<?php echo get_template_directory_uri(); ?>/info/contact.html"><h1>Contact</h1></a>
                </li>
            </ul>
        </div>
    </nav>