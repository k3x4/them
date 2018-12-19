<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package them
 */
get_header();
?>

<div class="wrapper">

    <div class="<?php echo themClass('content_layout')->getContainerClass(); ?>" id="content" tabindex="-1">

        <div class="row">

            <div class="<?php echo themClass('content_layout')->getContentClasses(); ?>" id="primary">
                <main id="main" class="site-main">

                    <?php
                    while (have_posts()) : the_post();

                        get_template_part('template-parts/content/content', get_post_format());

                        the_post_navigation();

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
