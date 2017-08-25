<?php

namespace Them\Sidebars\CSS\Layout;

use Them\Sidebars;
use Them\Helpers;
use Them\ICSS;

class SidebarContentSidebar implements ICSS{
    
    public function getCSS() {
        $sidebars = new Sidebars\Main\Layout;
        $content = new Content;
        
        $wrapperPaddingFirstSidebar = $sidebars->getSidebarWrapperPadding(SIDEBAR_FIRST);
        $wrapperPaddingFirstSidebar = Helpers\Converter::spacingToCSS($wrapperPaddingFirstSidebar, 'padding');
        
        $mainPaddingFirstSidebar = $sidebars->getSidebarMainPadding(SIDEBAR_FIRST);
        $mainPaddingFirstSidebar = Helpers\Converter::spacingToCSS($mainPaddingFirstSidebar, 'padding');
        
        $wrapperPaddingSecondSidebar = $sidebars->getSidebarWrapperPadding(SIDEBAR_SECOND);
        $wrapperPaddingSecondSidebar = Helpers\Converter::spacingToCSS($wrapperPaddingSecondSidebar, 'padding');
        
        $mainPaddingSecondSidebar = $sidebars->getSidebarMainPadding(SIDEBAR_SECOND);
        $mainPaddingSecondSidebar = Helpers\Converter::spacingToCSS($mainPaddingSecondSidebar, 'padding');
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.content.container .widget-area-wrapper.sidebar_first, ' .
            '.content.container-fluid .widget-area-wrapper.sidebar_first' => [
                'padding' => $wrapperPaddingFirstSidebar
            ],
            '.content.container .widget-area-wrapper.sidebar_second, ' .
            '.content.container-fluid .widget-area-wrapper.sidebar_second' => [
                'padding' => $wrapperPaddingSecondSidebar
            ],
            '.content.container .sidebar_first .widget-area, ' .
            '.content.container-fluid .sidebar_first .widget-area' => [
                'padding' => $mainPaddingFirstSidebar
            ],
            '.content.container .sidebar_second .widget-area, ' .
            '.content.container-fluid .sidebar_second .widget-area' => [
                'padding' => $mainPaddingSecondSidebar
            ]
        ];
 
        $contentMargin = $content->getCSS();
        return array_merge($cssBlocks, $contentMargin);
    }

    public function getCSSMedia() {
        return [];
    }
    
}
