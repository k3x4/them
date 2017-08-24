<?php

namespace Them\Typography;

use Them\ISection;

class Sections implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Typography', THEME_DOMAIN),
            'id' => 'typography',
            'desc' => __('Typography Settings.', THEME_DOMAIN),
            'icon' => 'el el-home'
        ]);
        
    }

}

