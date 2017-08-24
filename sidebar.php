<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package understrap
 */
?>

<?php $sidebars = themClass('sidebars_layout'); ?>

<?php if ( is_active_sidebar( 'them_sidebar_first' ) && $sidebars->firstSidebarActive()): ?>
<?php $sidebar1_classes = $sidebars->getSidebarClasses(SIDEBAR_FIRST); ?>
<div class="<?php echo $sidebar1_classes; ?>" role="complementary">
    <div class="widget-area">
        <?php dynamic_sidebar( 'them_sidebar_first' ); ?>
    </div>    
</div><!-- #secondary -->
<?php endif; ?>

<?php if ( is_active_sidebar( 'them_sidebar_second' ) && $sidebars->secondSidebarActive()): ?>
<?php $sidebar2_classes = $sidebars->getSidebarClasses(SIDEBAR_SECOND); ?>
<div class="<?php echo $sidebar2_classes; ?>" role="complementary">
    <div class="widget-area">
        <?php dynamic_sidebar( 'them_sidebar_second' ); ?>
    </div>    
</div><!-- #secondary -->
<?php endif; ?>
