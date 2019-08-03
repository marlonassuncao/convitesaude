<?php

// thumbnail
add_theme_support('post-thumbnails');
add_image_size('tb', 120, 120, true);
add_image_size('thumbPrincipal', 550, 450, true);
add_image_size('thumbPrincipalSmall', 250, 205, true);
add_image_size('thumbEbooks', 500, 730, true);

// length
function new_excerpt_length($length)
{
    return 15;
}
add_filter('excerpt_length', 'new_excerpt_length');

// E-books
function ebooks()
{
    $labels = array(
        'name' => _x('E-books', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('E-book', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('E-books', 'text_domain'),
        'name_admin_bar' => __('E-books', 'text_domain'),
        'archives' => __('E-books', 'text_domain'),
        'all_items' => __('Cadastros', 'text_domain'),
        'add_new_item' => __('Add novo', 'text_domain'),
        'add_new' => __('Novo', 'text_domain'),
        'new_item' => __('Novo', 'text_domain'),
        'edit_item' => __('Editar', 'text_domain'),
        'update_item' => __('Atualizar', 'text_domain'),
        'view_item' => __('Visualizar', 'text_domain'),
        'search_items' => __('Pesquisar', 'text_domain'),
        'not_found' => __('Sem registros!', 'text_domain'),
        'not_found_in_trash' => __('Sem registro na lixeira', 'text_domain'),
    );
    $args = array(
        'label' => __('E-books', 'text_domain'),
        'description' => __('E-books', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'taxonomies' => array(),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('ebooks', $args);
}
add_action('init', 'ebooks', 0);

// Especialistas
function especialistas()
{
    $labels = array(
        'name' => _x('Especialistas', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Especialista', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Especialistas', 'text_domain'),
        'name_admin_bar' => __('Especialistas', 'text_domain'),
        'archives' => __('Especialistas', 'text_domain'),
        'all_items' => __('Cadastros', 'text_domain'),
        'add_new_item' => __('Add novo', 'text_domain'),
        'add_new' => __('Novo', 'text_domain'),
        'new_item' => __('Novo', 'text_domain'),
        'edit_item' => __('Editar', 'text_domain'),
        'update_item' => __('Atualizar', 'text_domain'),
        'view_item' => __('Visualizar', 'text_domain'),
        'search_items' => __('Pesquisar', 'text_domain'),
        'not_found' => __('Sem registros!', 'text_domain'),
        'not_found_in_trash' => __('Sem registro na lixeira', 'text_domain'),
    );
    $args = array(
        'label' => __('Especialistas', 'text_domain'),
        'description' => __('Especialistas', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'taxonomies' => array(),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('especialistas', $args);
}
add_action('init', 'especialistas', 0);

// Clínicas
function clinicas()
{
    $labels = array(
        'name' => _x('Clínicas', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Clínica', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Clínicas', 'text_domain'),
        'name_admin_bar' => __('Clínicas', 'text_domain'),
        'archives' => __('Clínicas', 'text_domain'),
        'all_items' => __('Cadastros', 'text_domain'),
        'add_new_item' => __('Add novo', 'text_domain'),
        'add_new' => __('Novo', 'text_domain'),
        'new_item' => __('Novo', 'text_domain'),
        'edit_item' => __('Editar', 'text_domain'),
        'update_item' => __('Atualizar', 'text_domain'),
        'view_item' => __('Visualizar', 'text_domain'),
        'search_items' => __('Pesquisar', 'text_domain'),
        'not_found' => __('Sem registros!', 'text_domain'),
        'not_found_in_trash' => __('Sem registro na lixeira', 'text_domain'),
    );
    $args = array(
        'label' => __('Clínicas', 'text_domain'),
        'description' => __('Clínicas', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'taxonomies' => array(),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('clinicas', $args);
}
add_action('init', 'clinicas', 0);

// Doenças/Sintomas
function doencas()
{
    $labels = array(
        'name' => _x('Doenças', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Doença', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Doenças', 'text_domain'),
        'name_admin_bar' => __('Doenças', 'text_domain'),
        'archives' => __('Doenças', 'text_domain'),
        'all_items' => __('Cadastros', 'text_domain'),
        'add_new_item' => __('Add novo', 'text_domain'),
        'add_new' => __('Novo', 'text_domain'),
        'new_item' => __('Novo', 'text_domain'),
        'edit_item' => __('Editar', 'text_domain'),
        'update_item' => __('Atualizar', 'text_domain'),
        'view_item' => __('Visualizar', 'text_domain'),
        'search_items' => __('Pesquisar', 'text_domain'),
        'not_found' => __('Sem registros!', 'text_domain'),
        'not_found_in_trash' => __('Sem registro na lixeira', 'text_domain'),
    );
    $args = array(
        'label' => __('Doenças', 'text_domain'),
        'description' => __('Doenças', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'taxonomies' => array(),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('doencas', $args);
}
add_action('init', 'doencas', 0);

// Especialidades
function especialidades()
{
    $labels = array(
        'name' => _x('Especialidades', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Especialidade', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Especialidades', 'text_domain'),
        'name_admin_bar' => __('Especialidades', 'text_domain'),
        'archives' => __('Especialidades', 'text_domain'),
        'all_items' => __('Cadastros', 'text_domain'),
        'add_new_item' => __('Add novo', 'text_domain'),
        'add_new' => __('Novo', 'text_domain'),
        'new_item' => __('Novo', 'text_domain'),
        'edit_item' => __('Editar', 'text_domain'),
        'update_item' => __('Atualizar', 'text_domain'),
        'view_item' => __('Visualizar', 'text_domain'),
        'search_items' => __('Pesquisar', 'text_domain'),
        'not_found' => __('Sem registros!', 'text_domain'),
        'not_found_in_trash' => __('Sem registro na lixeira', 'text_domain'),
    );
    $args = array(
        'label' => __('Especialidades', 'text_domain'),
        'description' => __('Especialidades', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'taxonomies' => array(),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('especialidades', $args);
}
add_action('init', 'especialidades', 0);

// Receitas
function receitas()
{
    $labels = array(
        'name' => _x('Receitas', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Receita', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Receitas', 'text_domain'),
        'name_admin_bar' => __('Receitas', 'text_domain'),
        'archives' => __('Receitas', 'text_domain'),
        'all_items' => __('Cadastros', 'text_domain'),
        'add_new_item' => __('Add novo', 'text_domain'),
        'add_new' => __('Novo', 'text_domain'),
        'new_item' => __('Novo', 'text_domain'),
        'edit_item' => __('Editar', 'text_domain'),
        'update_item' => __('Atualizar', 'text_domain'),
        'view_item' => __('Visualizar', 'text_domain'),
        'search_items' => __('Pesquisar', 'text_domain'),
        'not_found' => __('Sem registros!', 'text_domain'),
        'not_found_in_trash' => __('Sem registro na lixeira', 'text_domain'),
    );
    $args = array(
        'label' => __('Receitas', 'text_domain'),
        'description' => __('Receitas', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'taxonomies' => array(),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('receitas', $args);
}
add_action('init', 'receitas', 0);
