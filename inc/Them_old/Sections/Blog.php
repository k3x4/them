<?php

namespace Them\Sections;

class Blog implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Blog', THEME_DOMAIN),
            'id' => 'blog',
            'desc' => __('Blog Settings.', THEME_DOMAIN),
            'icon' => 'el el-home'
        ]);
        
    }

}
