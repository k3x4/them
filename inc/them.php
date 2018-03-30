<?php

require_once THEME_DIR . '/inc/Them/Autoloader.php';
require_once THEME_DIR . '/inc/theme-constants.php';
require_once THEME_DIR . '/inc/them-functions.php';

add_action( 'admin_init', function(){
    if ( ! is_plugin_active( 'redux-framework/redux-framework.php' ) ) {
        return;
    }
    
    require THEME_DIR . '/inc/redux/admin-init.php';

    $them = new Them\Them;
    $them->setupMenu();
    $them->setupHooks();
});