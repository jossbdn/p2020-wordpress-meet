<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- Appel du fichier style.css de notre thème -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <!--
        Tout le contenu de la partie head de mon site
     -->

    <!-- Execution de la fonction wp_head() obligatoire ! -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header">
    <nav class="#000000 black accent-3 z-depth-0">
        <div class="container nav-wrapper">
            <a href="<?php echo get_home_url(); ?>" class="brand-logo" style="font-weight: bold;">meat</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <?php
                    $args=array(
                        'theme_location' => 'header', // nom du slug
                        'menu' => 'header_fr', // nom à donner cette occurence du menu
                        'menu_class' => 'menu_header', // class à attribuer au menu
                        'menu_id' => 'menu_id' // id à attribuer au menu
                        // voir les autres arguments possibles sur le codex
                    );
                    wp_nav_menu($args);
                ?>
            </ul>
        </div>
    </nav>
</header>