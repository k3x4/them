<?php

namespace Them\Sections;

class Typography implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Typography', THEME_DOMAIN),
            'id' => 'typography',
            'desc' => __('Typography Settings.', THEME_DOMAIN),
            'icon' => 'el el-home'
        ]);
        
    }

}
