<?php
function my_theme_setup() {

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');	
    
};
add_action('after_setup_theme', 'my_theme_setup');

function googlefont_setup() {
    wp_enqueue_script('poppis', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap');
}

add_action('wp_enqueue_script', 'googlefont_setup');


function wp_sidebar() {
    register_sidebar (
        array (
            'name' => 'Home sidebar',
            'id' => 'sidebar-1',
            'description' => 'Descrição da sidebar',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title'=> '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
     );
}

add_action('widgets_init', 'wp_sidebar');

/* Criando o registro do custom navigation walker */
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Registrando o menu dinâmico 
register_nav_menus (
    array (
        'principal' => __('Menu Principal', 'temameu'),
        'footer' => __('Menu footer', 'temameu')      
    )
);

/*  Custom post type do banner */

function slider_register() {
    $labels = array(
        'name' => _x('Slider', 'post type geral name'),
        'singular_name' => _x('slider', 'post type singular name'),
        'add_new' => _x('Adicionar slider', 'slier'),
        'add_new_item' => __('Adicionar slider'),
        'edit_item' => __('Editar slider'),
        'new_item' => __('Novo slider'),
        'view_item' => __('Ver slider'),
        'search_item' => __('Procurar slider'),
        'not_found' => __('Nada encontrado'),
        'not_found_in_trash' => __('Nada encontrado na lixeira'),
        'parents_item_colon' => ''
    );
    $args = array (
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true, 
        'query_var' => true, 
        'rewrite' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-code',
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 6,
        'supports' => array ('title', 'thumbnail'),
    );
    register_post_type('slider', $args);
}
add_action('init', 'slider_register');

require_once get_template_directory() . '/send_contato.php';
