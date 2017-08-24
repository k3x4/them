<?php

namespace Them\Sections;

class General implements ISection{
    
    public static function addSection() {
        
        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('General', THEME_DOMAIN),
            'id' => 'general',
            'desc' => __('General Settings.', THEME_DOMAIN),
            'icon' => 'el el-home'
        ]);
        
    }
    
}
