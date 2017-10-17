<?php

    define( 'THEME_PATH' ,          get_template_directory()            );
    define( 'TEMPLATE_PATH' ,       THEME_PATH .    '/templates'        );
    define( 'THEME_URL' ,           get_template_directory_uri()        );
    define( 'CSS_URL' ,             THEME_URL .    '/assets/css'       );
    define( 'IMAGES_URL' ,          THEME_URL .    '/assets/img'       );
    define( 'JS_URL' ,              THEME_URL .    '/assets/js'      );
    define( 'FAVICONS_URL' ,        THEME_URL .    '/assets/favicon'      );
    define( 'ADMIN_IMAGES_URL' ,    IMAGES_URL .   '/admin'             );

    function addScripts()
    {
        wp_register_style( 'mainStyle', CSS_URL . '/style.css' );
        wp_register_style( 'materializeStyle', CSS_URL . '/materialize.css' );

        wp_enqueue_style( 'mainStyle' );
        wp_enqueue_style( 'materializeStyle' );
    }

    add_action( 'wp_enqueue_scripts', 'addScripts' );


    foreach ( glob( THEME_PATH . "/inc/*.php" ) as $file ) {
        include_once $file;
    }