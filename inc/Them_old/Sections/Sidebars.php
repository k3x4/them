<?php

namespace Them\Sections;

class Sidebars implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Sidebars', THEME_DOMAIN),
            'id' => 'sidebars',
            'desc' => __('Sidebars Settings', THEME_DOMAIN),
            'icon' => 'el el-home'
        ]);
        
    }

}
