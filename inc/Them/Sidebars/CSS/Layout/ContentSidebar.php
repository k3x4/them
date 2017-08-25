<?php

namespace Them\Sidebars\CSS\Layout;

use Them\Sidebars;
use Them\Helpers;
use Them\ICSS;

class ContentSidebar implements ICSS{
    
    public function getCSS() {
        $sidebars = new Sidebars\Main\Layout;
        $content = new Content;
        
        $padding = $sidebars->getSidebarPadding(SIDEBAR_FIRST);
        $padding = Helpers\Converter::spacingToCSS($padding, 'padding');
        
        $margin = $sidebars->getSidebarMargin(SIDEBAR_FIRST);
        $margin = Helpers\Converter::spacingToCSS($margin, 'margin');
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.content.container .widget-area-wrapper, ' .
            '.content.container-fluid .widget-area-wrapper' => [
                'padding' => '0'
            ],
            '.content.container .widget-area, ' .
            '.content.container-fluid .widget-area' => [
                'padding' => $padding,
                'margin' => $margin
            ]
        ];
 
        $contentMargin = $content->getCSS();
        return array_merge($cssBlocks, $contentMargin);
    }

    public function getCSSMedia() {
        return [];
    }
    
}
