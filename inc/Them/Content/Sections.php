<?php

namespace Them\Content;

use Them\ISection;

class Sections implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Content area', THEME_DOMAIN),
            'id' => 'content',
            'desc' => __('Content area settings.', THEME_DOMAIN),
            'icon' => 'el el-home',
        ]);
        
    }

}

