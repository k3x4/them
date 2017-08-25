<?php

namespace Them\Sidebars\CSS\Layout;

use Them\Sidebars;
use Them\Helpers;
use Them\ICSS;

class Content implements ICSS{
    
    public function getCSS() {
        $sidebars = new Sidebars\Main\Layout;
        
        $padding = $sidebars->getContentPadding();
        $padding = Helpers\Converter::spacingToCSS($padding, 'padding');
        
        $margin = $sidebars->getContentMargin();
        $margin = Helpers\Converter::spacingToCSS($margin, 'margin');
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.content.container .content-area, ' .
            '.content.container-fluid .content-area' => [
                'padding' => '0'
            ],
            '.content.container .content-area #main, ' .
            '.content.container-fluid .content-area #main' => [
                'padding' => $padding,
                'margin' => $margin
            ]
        ];
        
        return $cssBlocks;
    }

    public function getCSSMedia() {
        return [];
    }
    
}
