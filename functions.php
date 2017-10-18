<?php

    define( 'THEME_PATH' ,          get_template_directory()            );
    define( 'TEMPLATE_PATH' ,       THEME_PATH .    '/templates'        );
    define( 'THEME_URL' ,           get_template_directory_uri()        );
    define( 'CSS_URL' ,             THEME_URL .    '/assets/css'       );
    define( 'IMAGES_URL' ,          THEME_URL .    '/assets/img'       );
    define( 'JS_URL' ,              THEME_URL .    '/assets/js'      );
    define( 'FAVICONS_URL' ,        THEME_URL .    '/assets/favicon'      );
    define( 'ADMIN_IMAGES_URL' ,    IMAGES_URL .   '/admin'             );


    foreach ( glob( THEME_PATH . "/inc/*.php" ) as $file ) {
        include_once $file;
    }

    // Add menu support
    function register_my_menu() {
        register_nav_menu('header-menu',__( 'Header Menu' ));
    }

    add_action( 'init', 'register_my_menu' );