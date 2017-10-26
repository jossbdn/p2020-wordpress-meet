<?php

function add_theme_caps() {
    // gets the redactor role
    $admins = get_role( 'redacteur' );

    // gallery
    $admins->add_cap( 'edit_gallery' );
    $admins->add_cap( 'edit_galleries' );
    $admins->add_cap( 'edit_other_galleries' );
    $admins->add_cap( 'publish_galleries' );
    $admins->add_cap( 'read_gallery' );
    $admins->add_cap( 'read_private_galleries' );
    $admins->add_cap( 'delete_gallery' );

    // profile
    $admins->add_cap( 'edit_profile' );
    $admins->add_cap( 'edit_profiles' );
    $admins->add_cap( 'edit_other_profiles' );
    $admins->add_cap( 'publish_profiles' );
    $admins->add_cap( 'read_profile' );
    $admins->add_cap( 'read_private_profile' );
    $admins->add_cap( 'delete_profile' );
}
add_action( 'admin_init', 'add_theme_caps');