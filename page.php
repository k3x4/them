<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package them
 */
get_header();
?>

<div class="wrapper" id="wrapper-index">

    <div class="<?php echo themClass('general_layout')->getContainerClass(); ?>" id="content" tabindex="-1">

        <div class="row">

            <div class="<?php echo themClass('general_layout')->getContentClasses(); ?>" id="primary">
                <main id="main" class="site-main">

                    <?php
                    while (have_posts()) : the_post();

                        get_template_part('template-parts/content/content', 'page');

                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>

                </main><!-- #main -->
            </div><!-- #primary -->

            <?php get_sidebar(); ?>

        </div><!-- row -->

    </div><!-- container end -->

</div><!-- wrapper end -->

<?php
get_sidebar();
get_footer();
