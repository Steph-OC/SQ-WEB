<?php
function register_my_menu()
{
    register_nav_menu('main-menu', 'Menu principal');
    register_nav_menu('footer-menu', 'Menu pied_de_page');
}

function sqWeb_register_assets()
{
    wp_enqueue_style('style_theme', get_stylesheet_uri(), array(), '1.0');
    wp_enqueue_script('anime-js', get_template_directory_uri() . '/assets/js/anime.min.js', array(), '1.0.0', true);
    wp_enqueue_script('titre-principal-js', get_template_directory_uri() . '/assets/js/script-anime.js', array(), '1.0.0', true);
}

add_action('after_setup_theme', 'register_my_menu');
add_action('wp_enqueue_scripts', 'sqWeb_register_assets');

//svg
function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');