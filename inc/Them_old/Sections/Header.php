<?php

namespace Them\Sections;

class Header implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Header', THEME_DOMAIN),
            'id' => 'header',
            'desc' => __('Header Settings.', THEME_DOMAIN),
            'icon' => 'el el-home',
        ]);
        
    }

}
