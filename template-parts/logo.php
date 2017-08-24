<?php $logo = themClass('logofavicon_logo'); ?>

<?php if($logo->logoSet('default')): ?>
<a id='logo' 
   href='<?php echo get_home_url(); ?>' 
   title='<?php echo get_bloginfo( 'name' ); ?>' 
   >
    <img class='logo-img' src='<?php echo themClass('logofavicon_logo')->getLogoURL(); ?>' />
</a>
<?php else: ?>
    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
        <?php bloginfo('name'); ?></a>
    </h1>
<?php endif; ?>