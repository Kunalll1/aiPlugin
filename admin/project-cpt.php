<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function custom_projects_post_type() {
    $labels = array(
        'name'               => 'Projects',
        'singular_name'      => 'Project',
        'menu_name'          => 'Projects',
        'name_admin_bar'     => 'Project',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Project',
        'new_item'           => 'New Project',
        'edit_item'          => 'Edit Project',
        'view_item'          => 'View Project',
        'all_items'          => 'All Projects',
        'search_items'       => 'Search Projects',
        'not_found'          => 'No projects found.',
        'not_found_in_trash' => 'No projects found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'projects'),
        'menu_icon'          => 'dashicons-portfolio', 
        'supports'           => array('title'),
        'show_in_rest'       => false, // Enables Gutenberg editor
    );

    register_post_type('project', $args);
}
add_action('init', 'custom_projects_post_type');

