<?php

namespace Them\Sidebars\CSS\Layout;

use Them\Sidebars;
use Them\Helpers;
use Them\ICSS;

class ContentSidebar implements ICSS{
    
    public function getCSS() {
        $sidebars = new Sidebars\Main\Layout;
        $content = new Content;
        
        $wrapperPadding = $sidebars->getSidebarWrapperPadding(SIDEBAR_FIRST);
        $wrapperPadding = Helpers\Converter::spacingToCSS($wrapperPadding, 'padding');
        
        $mainPadding = $sidebars->getSidebarMainPadding(SIDEBAR_FIRST);
        $mainPadding = Helpers\Converter::spacingToCSS($mainPadding, 'padding');
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.content.container .widget-area-wrapper, ' .
            '.content.container-fluid .widget-area-wrapper' => [
                'padding' => $wrapperPadding
            ],
            '.content.container .widget-area, ' .
            '.content.container-fluid .widget-area' => [
                'padding' => $mainPadding
            ]
        ];
 
        $contentPadding = $content->getCSS();
        return array_merge($cssBlocks, $contentPadding);
    }

    public function getCSSMedia() {
        return [];
    }
    
    public function getCSSMediaRetina() {
        return [];
    }
    
}
