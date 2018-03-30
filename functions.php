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

require_once THEME_DIR . '/inc/tgmpa.php';
require_once THEME_DIR . '/inc/them.php';

require_once THEME_DIR . '/inc/theme-setup.php';
require_once THEME_DIR . '/inc/admin.php';
require_once THEME_DIR . '/inc/template-tags.php';
require_once THEME_DIR . '/inc/template-functions.php';
require_once THEME_DIR . '/inc/jetpack.php';
require_once THEME_DIR . '/inc/lib/vendor/autoload.php';
