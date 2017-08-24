<?php

if (!function_exists('them_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function them_setup() {

        /*
         * Add Redux Framework
         */
        require THEME_DIR . '/inc/redux/admin-init.php';
        
        $them = new Them\Them;
        $them->setupMenu();

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on them, use a find and replace
         * to change 'them' to the name of your theme in all the template files.
         */
        load_theme_textdomain(THEME_DOMAIN, THEME_DIR . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        /* if (them_Header::menuNum() == 1) {
          register_nav_menus(array(
          'menu-primary' => esc_html__('Primary Menu', THEME_DOMAIN),
          ));
          } else {
          register_nav_menus(array(
          'menu-left' => esc_html__('Left Menu', THEME_DOMAIN),
          ));
          register_nav_menus(array(
          'menu-right' => esc_html__('Right Menu', THEME_DOMAIN),
          ));
          } */


        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        /* add_theme_support('custom-background', apply_filters('them_custom_background_args', array(
          'default-color' => 'ffffff',
          'default-image' => '',
          ))); */

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        /* add_theme_support('custom-logo', array(
          'height' => 250,
          'width' => 250,
          'flex-width' => true,
          'flex-height' => true,
          )); */
    }

endif;
add_action('after_setup_theme', 'them_setup');

/**
 * Enqueue scripts and styles.
 */
function them_scripts() {
    wp_enqueue_script('jquery');

    wp_enqueue_style('them-bootstrap', THEME_URL . '/inc/lib/vendor/twbs/bootstrap/dist/css/bootstrap.min.css');

    wp_enqueue_style('them-style', get_stylesheet_uri());

    wp_enqueue_script('them-navigation', THEME_URL . '/js/navigation.js', [], THEME_VERSION, true);

    wp_enqueue_script('them-frontend', THEME_URL . '/js/frontend.js', ['jquery'], THEME_VERSION, true);

    wp_enqueue_script('them-skip-link-focus-fix', THEME_URL . '/js/skip-link-focus-fix.js', [], THEME_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    wp_enqueue_style('them-generated-css', THEME_URL . '/css/theme.css');
}

add_action('wp_enqueue_scripts', 'them_scripts');

function them_scripts_footer() {
    wp_enqueue_style('font-awesome', 'https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css');
}

add_action('get_footer', 'them_scripts_footer');