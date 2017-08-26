<?php

namespace Them\Styling\CSS;

use Them\Styling;
use Them\ICSS;

class General implements ICSS {
     
    public function getCSS() {
        $general = new Styling\Main\General;
        
        $bodyColor = $general->getBodyColor();
        $linkColor = $general->getLinkColor();
        $linkHoverColor = $general->getLinkHoverColor();
        $pageBackground = $general->getPageBackground();
        
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
