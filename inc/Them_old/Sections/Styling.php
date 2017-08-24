<?php

namespace Them\Sections;

use Them\Common\Redux;

class Styling implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Styling', THEME_DOMAIN),
            'id' => 'styling',
            'desc' => __('Styling Settings.', THEME_DOMAIN),
            'icon' => 'el el-home'
        ]);
        
    }

}
