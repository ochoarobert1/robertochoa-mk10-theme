<?php

function portafolio() {

    $labels = array(
        'name'                  => _x( 'Portafolios', 'Post Type General Name', 'robertochoa' ),
        'singular_name'         => _x( 'Portafolio', 'Post Type Singular Name', 'robertochoa' ),
        'menu_name'             => __( 'Portafolio', 'robertochoa' ),
        'name_admin_bar'        => __( 'Portafolio', 'robertochoa' ),
        'archives'              => __( 'Archivo de Portafolio', 'robertochoa' ),
        'attributes'            => __( 'Atributos de Portafolio', 'robertochoa' ),
        'parent_item_colon'     => __( 'Portafolio Padre:', 'robertochoa' ),
        'all_items'             => __( 'Todos los Items', 'robertochoa' ),
        'add_new_item'          => __( 'Agregar Nuevo Item', 'robertochoa' ),
        'add_new'               => __( 'Agregar Nuevo', 'robertochoa' ),
        'new_item'              => __( 'Nuevo Item', 'robertochoa' ),
        'edit_item'             => __( 'Editar Item', 'robertochoa' ),
        'update_item'           => __( 'Actualizar Item', 'robertochoa' ),
        'view_item'             => __( 'Ver Item', 'robertochoa' ),
        'view_items'            => __( 'Ver Portafolio', 'robertochoa' ),
        'search_items'          => __( 'Buscar en Portafolio', 'robertochoa' ),
        'not_found'             => __( 'No hay Resultados', 'robertochoa' ),
        'not_found_in_trash'    => __( 'No hay Resultados en la Papelera', 'robertochoa' ),
        'featured_image'        => __( 'Imagen Destacada', 'robertochoa' ),
        'set_featured_image'    => __( 'Colocar Imagen Destacada', 'robertochoa' ),
        'remove_featured_image' => __( 'Remover Imagen Destacada', 'robertochoa' ),
        'use_featured_image'    => __( 'Usar como Imagen Destacada', 'robertochoa' ),
        'insert_into_item'      => __( 'Insertar dentro de Item', 'robertochoa' ),
        'uploaded_to_this_item' => __( 'Cargado a este item', 'robertochoa' ),
        'items_list'            => __( 'Listado del Portafolio', 'robertochoa' ),
        'items_list_navigation' => __( 'Navegación de Listado del Portafolio', 'robertochoa' ),
        'filter_items_list'     => __( 'Filtro de Listado del Portafolio', 'robertochoa' ),
    );
    $args = array(
        'label'                 => __( 'Portafolio', 'robertochoa' ),
        'description'           => __( 'Portafolio de Desarrollos', 'robertochoa' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'trackbacks', 'custom-fields', ),
        'taxonomies'            => array( 'custom_portafolio' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-testimonial',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type( 'portafolio', $args );

}
add_action( 'init', 'portafolio', 0 );
