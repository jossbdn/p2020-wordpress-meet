<?php

    // ajout des scripts

    function addScripts()
    {

        wp_register_script( 'materializeScript', JS_URL . '/bin/materialize.min.js', array('jquery'),'1.1', true);
        wp_enqueue_script('materializeScript');

        wp_register_script( 'mainScript', JS_URL . '/bin/script.js', array('jquery'),'1.1', true);
        wp_enqueue_script('mainScript');

        wp_register_style( 'materializeStyle', CSS_URL . '/materialize.css' );
        wp_enqueue_style( 'materializeStyle' );

        wp_register_style( 'mainStyle', CSS_URL . '/style.css' );
        wp_enqueue_style( 'mainStyle' );

        wp_register_style( 'googleIcons', 'https://fonts.googleapis.com/icon?family=Material+Icons' );
        wp_enqueue_style( 'googleIcons' );
    }

    add_action( 'wp_enqueue_scripts', 'addScripts' );