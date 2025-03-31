<?php 
/*
 * Plugin Name: AI Plugin
 */


if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


if (is_admin()) {
    require_once plugin_dir_path(__FILE__) . 'admin/project-cpt.php';
    require_once plugin_dir_path(__FILE__) . 'admin/setting-page.php';

}

?>