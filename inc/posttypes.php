<?php

/**
* Registra tipo de publicación de enseñanzas de cocina xd
**/

function rc_posttype_init() {
     $labels = array(
         'name'                  => _x( 'Aprende de cocina', 'recetasdecocina' ),
         'singular_name'         => _x( 'Aprende',  'recetasdecocina' ),
         'menu_name'             => _x( 'Aprende sobre cocina', 'Admin Menu text', 'recetasdecocina' ),
         'name_admin_bar'        => _x( 'Aprende sobre cocina', 'Add New on Toolbar', 'recetasdecocina' ),
         'add_new'               => __( 'Agregar nueva', 'recetasdecocina' ),
         'add_new_item'          => __( 'Agregar publicación', 'recetasdecocina' ),
         'new_item'              => __( 'Nueva enseñanza', 'recetasdecocina' ),
         'edit_item'             => __( 'Editar enseñanza', 'recetasdecocina' ),
         'view_item'             => __( 'Ver enseñanza', 'recetasdecocina' ),
         'all_items'             => __( 'Todas las enseñanza', 'recetasdecocina' ),
         'search_items'          => __( 'Buscar enseñanza', 'recetasdecocina' ),
         'parent_item_colon'     => __( 'Padre enseñanza:', 'recetasdecocina' ),
         'not_found'             => __( 'No se encontraron enseñanzas.', 'recetasdecocina' ),
         'not_found_in_trash'    => __( 'No se pudo encontrar enseñanzas en la Papelera', 'recetasdecocina' ),
         'featured_image'        => _x( 'Imagen destacada', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'recetasdecocina' ),
         'set_featured_image'    => _x( 'Agregar imagen destacada', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'recetasdecocina' ),
         'remove_featured_image' => _x( 'Borrar imagen destacada', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'recetasdecocina' ),
         'use_featured_image'    => _x( 'Usar Imagen destacada', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'recetasdecocina' ),
         'archives'              => _x( 'Archivo de enseñanzas', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'recetasdecocina' ),
         'insert_into_item'      => _x( 'Insertar en enseñanzas', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'recetasdecocina' ),
         'uploaded_to_this_item' => _x( 'Cargadas En enseñanzas', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'recetasdecocina' ),
         'filter_items_list'     => _x( 'Filtrar lista de enseñanza', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'recetasdecocina' ),
         'items_list_navigation' => _x( 'Aprende sobre cocina navegación', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'recetasdecocina' ),
         'items_list'            => _x( 'Enseñanza de cocina lista', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'recetasdecocina' )
     );
  
     $args = array(
         'labels'             => $labels,
         'public'             => true,
         'publicly_queryable' => true,
         'show_ui'            => true,
         'show_in_menu'       => true,
         'query_var'          => true,
         'rewrite'            => array( 'slug' => 'aprende-cocina' ),
         'capability_type'    => 'post',
         'has_archive'        => true,
         'menu_icon'          => 'dashicons-welcome-learn-more',
         // true como paginas (pueden tener hijos), false como posts (no tienen hijos)
         'hierarchical'       => false,
         'menu_position'      => 6,
         'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
         'show_in_rest'       => true,
         'rest_base'          => 'aprende-de-cocina',
         

     );
  
     register_post_type( 'aprende_cocina', $args );
 }
  
 add_action( 'init', 'rc_posttype_init' );

/*
* Plugin Name: Aprende sobre Taxonomy
* Description: Taxonomy de temas para aprender sobre cocina.
* Version: 1.0
* Author: Johan Grandas
*/
 
function rc_register_taxonomy_aprendizaje()
{
    $labels = [

        'name'              => _x('Aprendizajes', 'taxonomy general name', 'recetasdecocina'),
        'singular_name'     => _x('Aprendizaje', 'taxonomy singular name', 'recetasdecocina'),
        'search_items'      => __('Buscar aprendezaje', 'recetasdecocina'),
        'all_items'         => __('Todas los aprendizajes', 'recetasdecocina'),
        'parent_item'       => __('Padre aprendizaje', 'recetasdecocina'),
        'parent_item_colon' => __('Padre aprendizaje:', 'recetasdecocina'),
        'edit_item'         => __('Editar aprendizaje', 'recetasdecocina'),
        'update_item'       => __('Actualizar aprendizaje', 'recetasdecocina'),
        'add_new_item'      => __('Agregar nuevo aprendizaje', 'recetasdecocina'),
        'new_item_name'     => __('Nuevo nombre de aprendizaje', 'recetasdecocina'),
        'menu_name'         => __('Aprendizaje', 'recetasdecocina')
    ];

    $args = [

        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'       => true,
        'rewrite'           => ['slug' => 'aprendizaje']

        ];

register_taxonomy('aprendizaje', ['aprende_cocina'], $args);

}

add_action('init', 'rc_register_taxonomy_aprendizaje');



