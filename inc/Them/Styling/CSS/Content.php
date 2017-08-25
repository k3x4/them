<?php

namespace Them\Styling\CSS;

use Them\Styling;
use Them\ICSS;

class Content implements ICSS {
     
    public function getCSS() {
        $content = new Styling\Main\Content;
        
        $wrapperBackgroundColor = $content->getWrapperBackgroundColor();
        $blocksBackgroundColor = $content->getBlocksBackgroundColor();
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.content.container, .content.container-fluid' => [
                'background-color' => $wrapperBackgroundColor
            ],
            '.content.container .content-area-wrapper #main, ' .
            '.content.container-fluid .content-area-wrapper #main, ' .
            '.content.container .widget-area, ' .
            '.content.container-fluid .widget-area' => [
                'background-color' => $blocksBackgroundColor
            ]
        ];
        
        return $cssBlocks;
    }

    public function getCSSMedia() {
        return [];
    }
    
}
