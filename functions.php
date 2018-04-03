<?php

/**
 * them functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package them
 */

define('THEME_DOMAIN', 'them');
define('THEME_VERSION', '1.0.0');
define('THEME_DIR', get_template_directory());
define('THEME_URL', get_template_directory_uri());

require_once THEME_DIR . '/inc/them.php';
require_once THEME_DIR . '/inc/theme-setup.php';
require_once THEME_DIR . '/inc/admin.php';
require_once THEME_DIR . '/inc/template-tags.php';
require_once THEME_DIR . '/inc/template-functions.php';
require_once THEME_DIR . '/inc/jetpack.php';
require_once THEME_DIR . '/inc/lib/vendor/autoload.php';

/*
function exception_error_handler($severity, $message, $file, $line) {
    if (!(error_reporting() & $severity)) {
        // This error code is not included in error_reporting
        return;
    }
    throw new ErrorException($message, 0, $severity, $file, $line);
}
set_error_handler("exception_error_handler");
*/
/*
$k3x44 = [];
add_action( 'all', function(){ 
    global $k3x44;
    if(!isset($k3x44[current_filter()])){
        file_put_contents('actions_list.txt', current_filter().PHP_EOL, FILE_APPEND);
    }
    $k3x44[current_filter()]=''; 
    
} );
 * 
 * 
 */