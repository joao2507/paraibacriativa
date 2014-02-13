<?php

/* ======= Incluindo os scripts padrões ======= */
require dirname(__FILE__) . '/functions-fopa.php';

/* ======= Sidebar Menu Institucional ====== */
if (function_exists('register_sidebar')) {
    //register_sidebar(array('name' => 'Sidebar Principal'));
}

/* ====== suporte para imagem destacada ====== */
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

/* ====== suporte para Menus ====== */
add_theme_support('menus');

if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array('menu-principal' => 'Menu Principal','menu-encontro-economia-criativa'=>'Menu Encontro Economia Criativa','menu-lateral-encontro'=>'Menu Lateral Encontro')
    );
}

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');

    add_image_size('capa-full', 950, 0, true);
    add_image_size('destaque', 400, 267, true);
    add_image_size('box', 310, 180, true);
    add_image_size('box-sidebar', 270, 0, true);
    add_image_size('box-agenda', 270, 180, true);
    add_image_size('box-destaque', 390, 160, true);
    add_image_size('box-noticias', 300, 175, true);
    add_image_size('box-noticia', 250, 134, true);
    add_image_size('full-single', 590, 0, true);
    add_image_size('full-article', 390, 300, true);
    add_image_size('box-encontro', 182, 106, true);
    add_image_size('box-encontro-destaque', 210, 250, true);
}

add_post_type_support('page','excerpt');

function ot_theme_options_page_capability( $capability ) {
return 'edit_theme_options';
}
add_filter( 'option_page_capability_option_tree', 'ot_theme_options_page_capability' );

$editor = get_role('editor');
$editor->add_cap( 'edit_theme_options' ); 

global $wp_rewrite;
$projects_structure = '/eventos/%year%/%monthnum%/%eventos%/';
$wp_rewrite->add_rewrite_tag("%eventos%", '([^/]+)', "agenda=");
$wp_rewrite->add_permastruct('eventos', $projects_structure, false);
?>