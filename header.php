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
    <nav>
        <div class="container nav-wrapper">
            <a href="#" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">JavaScript</a></li>
            </ul>
        </div>
    </nav>
</header>