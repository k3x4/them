<?php

namespace Them\General\CSS;

use Them\General;
use Them\ICSS;

class Styling implements ICSS {
     
    public function getCSS() {
        $styling = new General\Main\Styling;
        
        $bodyColor = $styling->getBodyColor();
        $linkColor = $styling->getLinkColor();
        $linkHoverColor = $styling->getLinkHoverColor();
        $pageBackground = $styling->getPageBackground();
        
        $cssBlocks = [];
        $cssBlocks[] = [
            'html, body' => [
                'color' => $bodyColor
            ],
            'a, a:link, a:visited' => [
                'color' => $linkColor
            ],
            'a:hover, a:focus' => [
                'color' => $linkHoverColor
            ],
            'body #page' => [
                'background' => $pageBackground
            ]
        ];
        
        return $cssBlocks;
    }

    public function getCSSMedia() {
        return [];
    }
    
}
