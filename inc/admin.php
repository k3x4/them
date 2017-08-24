<?php

function them_admin_enqueue( $hook ) {
    if ('toplevel_page_' . THEME_DOMAIN . '_options' != $hook) {
        return;
    }
    wp_enqueue_script( 'them_redux_js', THEME_URL . '/js/admin.js' );
    wp_enqueue_style( 'them_redux_css', THEME_URL . '/css/admin.css' );
    
    wp_enqueue_style('them-admin-bootstrap', THEME_URL . '/css/admin-bootstrap.css');
}
add_action('admin_enqueue_scripts', 'them_admin_enqueue');
