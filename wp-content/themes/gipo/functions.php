<?php
// nav-walker
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

// Estilos e scripts
function load_scripts(){
    wp_enqueue_script('bootstrap-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), '4.6.2', true );
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js', array('jquery'), '4.6.2', true );
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css', array(), '4.6.2', 'all');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css', array(), '4.6.2', 'all');
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'load_scripts');

// Função de configuração de Tema
function wpcurso_config(){
    // Registrar menu
    register_nav_menus(
        array(
            'my_main_menu' => 'Main Menu',
            'menu_blog' => 'Menu Blog',
            'footer_menu' => 'Main Footer',
            'footer_menu2' => 'Main Footer 2',
            'footer_menu3' => 'Main Footer 3',
        )
    );

    $args = array(
        'height' => 225,
        'width' => 1920
    );
    add_theme_support('custom-header', $args);
}
add_action('after_setup_theme','wpcurso_config', 0);

?>