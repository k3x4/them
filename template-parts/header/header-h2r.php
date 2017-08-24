<?php
/**
 * Template part for header type: Horizontal | One line | Left logo
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package them
 */
?>

<header id="masthead" class="site-header">

    <div class="<?php echo themClass('header_layout')->getContainerClass(); ?>">

        <div class="row">

            <div class="col-md-12 text-right logo-col">

                <div class="site-branding">
                    <?php get_template_part('template-parts/logo'); ?>
                </div><!-- .site-branding -->

            </div>

        </div>

        <div class="row">

            <div class="col-md-12 text-right menu-col">

                <nav id="site-navigation" class="main-navigation clear">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'them'); ?></button>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-primary',
                        'menu_id' => 'primary-menu',
                        'menu_class' => 'clear'
                    ));
                    ?>
                </nav><!-- #site-navigation -->

            </div>

        </div>

    </div>
</header><!-- #masthead -->
