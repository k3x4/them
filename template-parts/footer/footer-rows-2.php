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

<footer id="colophon" class="site-footer">

    <?php $footer = themClass('footer_layout'); ?>
    <?php $widgetsRow1 = $footer->getRowWidgets(FOOTER_ROW_1); ?>
    <?php $widgetsRow2 = $footer->getRowWidgets(FOOTER_ROW_2); ?>
    <div class="<?php echo $footer->getContainerClass(); ?>">

        <div class="row">
            
            <?php foreach($widgetsRow1 as $widget): ?>
            
                <?php if (is_active_sidebar($widget['ID'])): ?>
                    <div id="<?php echo $widget['ID']; ?>" class="<?php echo $widget['class']; ?>" role="complementary">
                        <?php dynamic_sidebar($widget['ID']); ?>
                    </div>
                <?php endif; ?>
            
            <?php endforeach; ?>
            
        </div>
        
        <div class="row">
            
            <?php foreach($widgetsRow2 as $widget): ?>
            
                <?php if (is_active_sidebar($widget['ID'])): ?>
                    <div id="<?php echo $widget['ID']; ?>" class="<?php echo $widget['class']; ?>" role="complementary">
                        <?php dynamic_sidebar($widget['ID']); ?>
                    </div>
                <?php endif; ?>
            
            <?php endforeach; ?>
            
        </div>
        
    </div>    
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
