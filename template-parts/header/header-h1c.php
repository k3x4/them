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

    <?php $header = themClass('header_layout'); ?>

    <div class="header-wrapper <?php echo $header->getContainerClass(); ?>">

        <div class="header">

            <div class="row">

                <?php list($firstColumn, $secondColumn, $thirdColumn) = $header->getHeaderColumnsClasses(); ?>

                <div class="<?php echo $firstColumn; ?> logo-col">

                    <div class="site-branding">
                        <?php get_template_part('template-parts/logo'); ?>
                    </div><!-- .site-branding -->

                </div>

                <div class="<?php echo $secondColumn; ?> menu-col">

                    <nav id="site-navigation-left" class="main-navigation clear">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'them'); ?></button>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-left',
                            'menu_id' => 'left-menu',
                            'menu_class' => 'clear'
                        ));
                        ?>
                    </nav><!-- #site-navigation -->

                </div>

                <div class="<?php echo $thirdColumn; ?> menu-col">

                    <nav id="site-navigation-right" class="main-navigation clear">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'them'); ?></button>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-right',
                            'menu_id' => 'right-menu',
                            'menu_class' => 'clear'
                        ));
                        ?>
                    </nav><!-- #site-navigation -->

                </div>

            </div>

        </div>
    </div>
</header><!-- #masthead -->
