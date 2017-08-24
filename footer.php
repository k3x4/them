<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package them
 */
?>

<?php $footerTemplate = themClass('footer_layout')->getRowsTemplate(); ?>   
<?php get_template_part('template-parts/footer/footer', $footerTemplate); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
