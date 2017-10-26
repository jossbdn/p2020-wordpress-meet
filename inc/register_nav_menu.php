<?php

    // Add menu support
    function registerMenu() {
        register_nav_menu( 'header', 'Menu entête' );
        register_nav_menu( 'footer', 'Menu bas de page' );
        register_nav_menu( 'topBar', 'Menu top Bar' );
    }

    add_action( 'init', 'registerMenu' );

    function themeSlugWidgetsInit() {
        $args = array(
            'name' => __('Sidebar Blog'),
            'id'   => 'sidebar-blog',
            'description' => '',
            'class' => '',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget' => '</li>',
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => '</h2>' );

        register_sidebars(1, $args);
    }

    add_action( 'widgets_init', 'themeSlugWidgetsInit' );
