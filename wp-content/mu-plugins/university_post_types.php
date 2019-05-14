<?php
function university_post_types(){
    //Event Post Type
    $argsEvent = array('public' => true, 'supports' => array('title', 'editor', 'excerpt'), 'rewrite' => array('slug' => 'events'), 'has_archive' => true, 'labels' => array('name' => 'Eventos', 'add_new_item' => 'Agregar nuevo Evento', 'edit_item' => 'Editar Evento', 'all_item' => 'Todos los eventos', 'singular_name' => 'Evento'), 'menu_icon' => 'dashicons-calendar' );
    register_post_type('event', $argsEvent);

    //Program Post Type
    $argsPrograms = array('public' => true, 'supports' => array('title', 'editor'), 'rewrite' => array('slug' => 'programs'), 'has_archive' => true, 'labels' => array('name' => 'Programs', 'add_new_item' => 'Agregar nuevo Programa', 'edit_item' => 'Editar Programa', 'all_item' => 'Todos los Programas', 'singular_name' => 'Programa'), 'menu_icon' => 'dashicons-awards' );
    register_post_type('program', $argsPrograms);

    //Professor Post Type
    $argsProfessor = array('public' => true, 'supports' => array('title', 'editor'), 'labels' => array('name' => 'Professors', 'add_new_item' => 'Agregar nuevo Profesor', 'edit_item' => 'Editar Profesor', 'all_item' => 'Todos los Profesor', 'singular_name' => 'Profesor'), 'menu_icon' => 'dashicons-welcome-learn-more' );
    register_post_type('professor', $argsProfessor);
}
add_action('init', 'university_post_types'); #Cargamos el nuevo item para los eventos

?>