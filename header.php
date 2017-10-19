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
                <?php wp_nav_menu( array(
                    'menu' => 'header-menu'
                ) );
                ?>
            </ul>
        </div>
    </nav>
</header>