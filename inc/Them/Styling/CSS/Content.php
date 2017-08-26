<?php

namespace Them\Styling\CSS;

use Them\Styling;
use Them\ICSS;

class Content implements ICSS {
     
    public function getCSS() {
        $content = new Styling\Main\Content;
        
        $wrapperBackground = $content->getWrapperBackground();
        $blocksBackground = $content->getBlocksBackground();
        
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
    
}
