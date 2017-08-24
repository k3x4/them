<?php

namespace Them\Sidebars;

use Them\ISection;

class Sections implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Sidebars', THEME_DOMAIN),
            'id' => 'sidebars',
            'desc' => __('Sidebars Settings', THEME_DOMAIN),
            'icon' => 'el el-home'
        ]);
        
    }

}

