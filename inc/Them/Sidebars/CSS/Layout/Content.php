<?php

namespace Them\Sidebars\CSS\Layout;

use Them\Sidebars;
use Them\Helpers;
use Them\ICSS;

class Content implements ICSS{
    
    public function getCSS() {
        $sidebars = new Sidebars\Main\Layout;
        
        $wrapperPadding = $sidebars->getContentWrapperPadding();
        $wrapperPadding = Helpers\Converter::spacingToCSS($wrapperPadding, 'padding');
        
        $mainPadding = $sidebars->getContentMainPadding();
        $mainPadding = Helpers\Converter::spacingToCSS($mainPadding, 'padding');
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.content.container .content-area-wrapper, ' .
            '.content.container-fluid .content-area-wrapper' => [
                'padding' => $wrapperPadding
            ],
            '.content.container .content-area-wrapper #main, ' .
            '.content.container-fluid .content-area-wrapper #main' => [
                'padding' => $mainPadding
            ]
        ];
        
        return $cssBlocks;
    }

    public function getCSSMedia() {
        return [];
    }
    
    public function getCSSMediaRetina() {
        return [];
    }
    
}
