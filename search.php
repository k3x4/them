<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package them
 */
get_header();
?>

<div class="wrapper" id="wrapper-index">

    <?php $general = new them_general; ?>
    <?php $container_class = $general->get_container_class(); ?>
    <div class="<?php echo $container_class; ?>" id="content" tabindex="-1">

        <div class="row">

            <?php $general = new them_general; ?>
            <?php $content_classes = $general->get_content_classes(); ?>
            <div class="<?php echo $content_classes; ?>" id="primary">
                <main id="main" class="site-main">

                    <?php if (have_posts()) : ?>

                        <header class="page-header">
                            <h1 class="page-title"><?php
                    /* translators: %s: search query. */
                    printf(esc_html__('Search Results for: %s', 'them'), '<span>' . get_search_query() . '</span>');
                        ?></h1>
                        </header><!-- .page-header -->

                        <?php
                        /* Start the Loop */
                        while (have_posts()) : the_post();

                            /**
                             * Run the loop for the search to output the results.
                             * If you want to overload this in a child theme then include a file
                             * called content-search.php and that will be used instead.
                             */
                            get_template_part('template-parts/content/content', 'search');

                        endwhile;

                        the_posts_navigation();

                    else :

                        get_template_part('template-parts/content/content', 'none');

                    endif;
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
