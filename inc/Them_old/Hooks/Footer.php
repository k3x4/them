<?php

namespace Them\Hooks;

use Them\Common\Footer as CommonFooter;

class Footer implements IHook {
    
    private $footer;
    
    public function __construct() {
        $this->footer = new CommonFooter\Layout;
    }

    public function addHooks(){
        add_action('widgets_init', [$this, 'widgetsInit']);
    }
    
    public function widgetsInit() {
        $rows = $this->footer->getRows();
        
        for($i=1;$i<=$rows;$i++){
            $widgetName = 'Footer row ' . $i;
            list($colWidth, $colCount) = $this->footer->getRowWidgetsSize($i);
            $this->registerWidgets($widgetName, $colCount);
        }
    }
    
    public function registerWidgets($widgetName, $colCount) {
        for ($i = 1; $i <= $colCount; $i++) {
            $name = $widgetName . ' col ' . $i;
            $key = THEME_DOMAIN . '_' . sanitize_title_with_dashes($name);
            register_sidebar([
                'name' => __($name, THEME_DOMAIN),
                'id' => $key,
                'before_widget' => '<aside id="%1$s" class="widget inner-padding %2$s">',
                'after_widget' => '</aside>',
                'before_title' => apply_filters('them_start_widget_title', '<h4 class="widget-title">'),
                'after_title' => apply_filters('them_end_widget_title', '</h4>'),
            ]);
        }
    }
    
}
