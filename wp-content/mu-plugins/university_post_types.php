<?php
function university_post_types(){
    $args = array('public' => true, 'supports' => array('title', 'editor', 'excerpt'), 'rewrite' => array('slug' => 'events'), 'has_archive' => true, 'labels' => array('name' => 'Eventos', 'add_new_item' => 'Agregar nuevo Evento', 'edit_item' => 'Editar Evento', 'all_item' => 'Todos los eventos', 'singular_name' => 'Evento'), 'menu_icon' => 'dashicons-calendar' );
    register_post_type('event', $args);
}
add_action('init', 'university_post_types'); #Cargamos el nuevo item para los eventos

?>