<?php

namespace Them\Sidebars\CSS\Layout;

use Them\Sidebars;
use Them\Helpers;
use Them\ICSS;

class ContentSidebarSidebar implements ICSS{
    
    public function getCSS() {
        $sidebars = new Sidebars\Main\Layout;
        $content = new Content;
        
        $paddingFirstSidebar = $sidebars->getSidebarPadding(SIDEBAR_FIRST);
        $paddingFirstSidebar = Helpers\Converter::spacingToCSS($paddingFirstSidebar, 'padding');
        
        $marginFirstSidebar = $sidebars->getSidebarMargin(SIDEBAR_FIRST);
        $marginFirstSidebar = Helpers\Converter::spacingToCSS($marginFirstSidebar, 'margin');
        
        $paddingSecondSidebar = $sidebars->getSidebarPadding(SIDEBAR_SECOND);
        $paddingSecondSidebar = Helpers\Converter::spacingToCSS($paddingSecondSidebar, 'padding');
        
        $marginSecondSidebar = $sidebars->getSidebarMargin(SIDEBAR_SECOND);
        $marginSecondSidebar = Helpers\Converter::spacingToCSS($marginSecondSidebar, 'margin');
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.content.container .widget-area-wrapper, ' .
            '.content.container-fluid .widget-area-wrapper' => [
                'padding' => '0'
            ],
            '.content.container .sidebar_first .widget-area, ' .
            '.content.container-fluid .sidebar_first .widget-area' => [
                'padding' => $paddingFirstSidebar,
                'margin' => $marginFirstSidebar
            ],
            '.content.container .sidebar_second .widget-area, ' .
            '.content.container-fluid .sidebar_second .widget-area' => [
                'padding' => $paddingSecondSidebar,
                'margin' => $marginSecondSidebar
            ]
        ];
 
        $contentMargin = $content->getCSS();
        return array_merge($cssBlocks, $contentMargin);
    }

    public function getCSSMedia() {
        return [];
    }
    
}
