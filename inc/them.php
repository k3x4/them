<?php

require_once THEME_DIR . '/inc/Them/Autoloader.php';
require_once THEME_DIR . '/inc/theme-constants.php';
require_once THEME_DIR . '/inc/them-functions.php';

add_action('after_setup_theme', function() {
    require THEME_DIR . '/inc/redux/admin-init.php';

    $them = new Them\Them;
    $them->setupMenu();
    $them->setupHooks();
});

//$them = new Them\Them;
//$them->setupHooks();