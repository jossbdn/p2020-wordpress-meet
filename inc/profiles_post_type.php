<?php

    // add custom post type
    function addCustomPostType() {
        $post_type = "profile";
        $args = array(
            'public'              => true,
            'label'               => 'Profiles',
            'menu_icon'           => 'dashicons-admin-users',
            'hierarchical'        => false,
            'supports'            => array( 'title','thumbnail','editor', 'excerpt',  'revisions'),
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 5,
            'show_in_nav_menus'   => true,
            'publicly_queryable'  => true,
            'exclude_from_search' => false,
            'has_archive'         => false,
            'query_var'           => true,
            'can_export'          => true,
            'rewrite'             => array( 'slug' => $post_type ),
            'capabilities' => array(
                'edit_post' => 'edit_profile',
                'edit_posts' => 'edit_profiles',
                'edit_others_posts' => 'edit_others_profiles',
                'publish_posts' => 'publish_profiles',
                'read_post' => 'read_profile',
                'read_private_posts' => 'read_private_profiles',
                'delete_post' => 'delete_profile'
            ),
        );
        register_post_type( 'profile', $args );
    }
    add_action( 'init', 'addCustomPostType' );

    // add custom taxonomy
    $taxonomy = "sexe";
    $object_type = array("profile");
    $args = array(
        'label' => __( 'Sexe' ),
        'rewrite' => array( 'slug' => 'sexe' ),
        'hierarchical' => true,
        'has_archive'  => false,
        'supports' => array( 'title','thumbnail','editor', 'excerpt',  'revisions'),
    );
    register_taxonomy( $taxonomy, $object_type, $args );