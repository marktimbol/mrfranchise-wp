<?php

add_filter('show_admin_bar', '__return_false');

add_theme_support('post-thumbnails');

if ( function_exists( 'register_nav_menu' ) ) {
    register_nav_menu( 'main-menu', 'Main Menu' );
}

add_action('wp_head', 'show_template');
function show_template() {
    global $template;
    //echo basename($template);
}