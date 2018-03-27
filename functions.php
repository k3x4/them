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

//require_once THEME_DIR . '/inc/classes/them.php';

require_once THEME_DIR . '/inc/Them/Autoloader.php';

require_once THEME_DIR . '/inc/theme-constants.php';
require_once THEME_DIR . '/inc/theme-setup.php';
require_once THEME_DIR . '/inc/them-functions.php';

$them = new Them\Them;
$them->setupHooks();

/**
 * Load admin scripts.
 */
require_once THEME_DIR . '/inc/admin.php';

/**
 * Custom template tags for this theme.
 */
require_once THEME_DIR . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require_once THEME_DIR . '/inc/template-functions.php';

/**
 * Load Jetpack compatibility file.
 */
require_once THEME_DIR . '/inc/jetpack.php';


/**
 * Load libs.
 */
require_once THEME_DIR . '/inc/lib/vendor/autoload.php';
