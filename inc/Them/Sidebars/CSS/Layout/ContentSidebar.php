<?php

namespace Them\Sidebars\CSS\Layout;

use Them\Sidebars;
use Them\Helpers;
use Them\ICSS;

class ContentSidebar implements ICSS{
    
    public function getCSS() {
        $sidebars = new Sidebars\Main\Layout;
        $marginLeft = $sidebars->getSidebarMargin(SIDEBAR_FIRST, 'left');
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.content.container-fluid' => [
                'margin-left' => $marginLeft
            ]
        ];
        return $cssBlocks;
    }

    public function getCSSMedia() {
        return [];
    }
    
}
