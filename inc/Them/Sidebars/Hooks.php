<?php

namespace Them\Sidebars;

use Them\IHook;

class Hooks implements IHook {
    
    private $sidebars;
    
    public function __construct() {
        $this->sidebars = new Main\Layout;
    }
    
    public function addHooks(){
        add_action('widgets_init', [$this, 'sidebarsInit']);
    }
    
    public function sidebarsInit(){
        $sidebarsCount = $this->sidebars->getSidebarsCount();

        if ($sidebarsCount >= 1) {
            $title = ($sidebarsCount == 1) ? 'Sidebar' : 'First Sidebar';
            register_sidebar([
                'name' => __($title, THEME_DOMAIN),
                'id' => 'them_sidebar_first',
                'before_widget' => '<aside id="%1$s" class="widget inner-padding %2$s">',
                'after_widget' => '</aside>',
                'before_title' => apply_filters('them_start_widget_title', '<h4 class="widget-title">'),
                'after_title' => apply_filters('them_end_widget_title', '</h4>'),
            ]);
        }

        if ($sidebarsCount == 2) {
            register_sidebar([
                'name' => __('Second sidebar', THEME_DOMAIN),
                'id' => 'them_sidebar_second',
                'before_widget' => '<aside id="%1$s" class="widget inner-padding %2$s">',
                'after_widget' => '</aside>',
                'before_title' => apply_filters('them_start_widget_title', '<h4 class="widget-title">'),
                'after_title' => apply_filters('them_end_widget_title', '</h4>'),
            ]);
        }
    }
    
}