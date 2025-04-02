<?php


function add_project_settings_submenu() {
    add_submenu_page(
        'edit.php?post_type=project', // Attach it under "Projects"
        'Project Settings', // Page title
        'Settings', // Menu title
        'manage_options', // Capability
        'project-settings', // Slug (URL parameter)
        'project_settings_page_callback' // Function to display settings
    );
}
add_action('admin_menu', 'add_project_settings_submenu');

// Register settings
function register_project_settings() {
    register_setting('project_settings_group', 'custom_project_option');

    add_settings_section(
        'project_settings_section',
        'General Settings',
        null,
        'project-settings'
    );

    add_settings_field(
        'custom_project_option',
        'Custom Option:',
        'custom_project_option_callback',
        'project-settings',
        'project_settings_section'
    );
}
add_action('admin_init', 'register_project_settings');

// ========================= Add Menu Data Here =================

function project_settings_page_callback() {
    ?>
    <div class="wrap">
        <h1>Project Settings</h1>
        
    </div>
    <?php
}