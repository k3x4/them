<?php

namespace Them\Sections;

class Footer implements ISection {

    public static function addSection() {
        
        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Footer', THEME_DOMAIN),
            'id' => 'footer',
            'desc' => __('Footer Settings.', THEME_DOMAIN),
            'icon' => 'el el-home',
        ]);        
        
    }
    
}
