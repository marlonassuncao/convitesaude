<?php

// thumbnail
add_theme_support('post-thumbnails');
add_image_size('tb', 120, 120, true);
add_image_size('thumbPrincipal', 550, 450, true);
add_image_size('thumbPrincipalSmall', 200, 200, true);
add_image_size('thumbSidebar', 300, 200, true);
add_image_size('ad1', 728, 90, true);

// length
function new_excerpt_length($length)
{
    return 25;
}
add_filter('excerpt_length', 'new_excerpt_length');

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
        'has_archive' => false,
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
        'has_archive' => false,
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

// Conteúdo Especial
function conteudosespeciais()
{
    $labels = array(
        'name' => _x('Conteúdo Especial', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Conteúdo Especial', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Conteúdo Especial', 'text_domain'),
        'name_admin_bar' => __('Conteúdo Especial', 'text_domain'),
        'archives' => __('Conteúdo Especial', 'text_domain'),
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
    $rewrite = array(
        'slug' => 'conteudos-especiais',
        'with_front' => true,
        'hierarchical' => true,
    );
    $args = array(
        'label' => __('Conteúdo Especial', 'text_domain'),
        'description' => __('Conteúdo Especial', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
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
        'publicly_queryable' => false,
        'capability_type' => 'post',
        'rewrite' => $rewrite,
    );
    register_post_type('conteudosespeciais', $args);
}
add_action('init', 'conteudosespeciais', 0);

// Register Custom Taxonomy
function categoria_conteudos_especiais()
{
    $labels = array(
        'name' => _x('Categorias', 'Taxonomy General Name', 'text_domain'),
        'singular_name' => _x('Categoria', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name' => __('Categorias', 'text_domain'),
        'all_items' => __('All Items', 'text_domain'),
        'parent_item' => __('Parent Item', 'text_domain'),
        'parent_item_colon' => __('Parent Item:', 'text_domain'),
        'new_item_name' => __('New Item Name', 'text_domain'),
        'add_new_item' => __('Add New Item', 'text_domain'),
        'edit_item' => __('Edit Item', 'text_domain'),
        'update_item' => __('Update Item', 'text_domain'),
        'view_item' => __('View Item', 'text_domain'),
        'separate_items_with_commas' => __('Separate items with commas', 'text_domain'),
        'add_or_remove_items' => __('Add or remove items', 'text_domain'),
        'choose_from_most_used' => __('Choose from the most used', 'text_domain'),
        'popular_items' => __('Popular Items', 'text_domain'),
        'search_items' => __('Search Items', 'text_domain'),
        'not_found' => __('Not Found', 'text_domain'),
        'no_terms' => __('No items', 'text_domain'),
        'items_list' => __('Items list', 'text_domain'),
        'items_list_navigation' => __('Items list navigation', 'text_domain'),
    );
    $rewrite = array(
        'slug' => 'conteudos-especiais',
        'with_front' => true,
        'hierarchical' => true,
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'rewrite' => $rewrite,
        'show_in_rest' => true,
    );
    register_taxonomy('categorias', array('conteudosespeciais'), $args);
}
add_action('init', 'categoria_conteudos_especiais', 0);

// Adsense
function adsense()
{
    $labels = array(
        'name' => _x('Adsense', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Adsense', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Adsense', 'text_domain'),
        'name_admin_bar' => __('Adsense', 'text_domain'),
        'archives' => __('Adsense', 'text_domain'),
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
    $rewrite = array(
        'slug' => 'adsense',
        'with_front' => true,
        'hierarchical' => true,
    );
    $args = array(
        'label' => __('Adsense', 'text_domain'),
        'description' => __('Adsense', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
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
        'publicly_queryable' => false,
        'capability_type' => 'post',
        'rewrite' => $rewrite,
    );
    register_post_type('adsense', $args);
}
add_action('init', 'adsense', 0);
