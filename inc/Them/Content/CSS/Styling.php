<?php

namespace Them\Content\CSS;

use Them\Content;
use Them\ICSS;

class Styling implements ICSS {
     
    public function getCSS() {
        $styling = new Content\Main\Styling;
        
        $wrapperBackground = $styling->getWrapperBackground();
        $blocksBackground = $styling->getBlocksBackground();
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.content.container, .content.container-fluid' => [
                'background' => $wrapperBackground
            ],
            '.content.container .content-area-wrapper #main, ' .
            '.content.container-fluid .content-area-wrapper #main, ' .
            '.content.container .widget-area, ' .
            '.content.container-fluid .widget-area' => [
                'background' => $blocksBackground
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
