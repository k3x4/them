<?php

namespace Them\LogoFavicon;

use Them\ISection;

class Sections implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Logo & Favicon', THEME_DOMAIN),
            'id' => 'logofavicon',
            'desc' => __('Logo & Favicon Settings.', THEME_DOMAIN),
            'icon' => 'el el-home'
        ]);
        
    }

}

