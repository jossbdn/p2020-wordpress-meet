<?php

    function thumbnails_theme_support(){
        add_theme_support( 'post-thumbnails' );
    }

    add_action( 'after_setup_theme', 'thumbnails_theme_support' );

    function create_image_size(){
        add_image_size( "hub_article_thumbnail", 350, 300, true );
        add_image_size( "hub_film_thumbnail", 350 );
    }

    add_action( 'after_setup_theme', 'create_image_size');