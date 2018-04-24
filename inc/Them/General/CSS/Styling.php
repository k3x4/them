<?php

namespace Them\General\CSS;

use Them\General;
use Them\ICSS;

class Styling implements ICSS {
     
    public function getCSS() {
        $styling = new General\Main\Styling;
        
        $bodyColor = $styling->getBodyColor();
        $primaryColor = $styling->getPrimaryColor();
        $secondaryColor = $styling->getSecondaryColor();
        $linkColor = $styling->getLinkColor();
        $linkHoverColor = $styling->getLinkHoverColor();
        $pageBackground = $styling->getPageBackground();
        
        $cssBlocks = [];
        $cssBlocks[] = [
            'html, body' => [
                'color' => $bodyColor
            ],
            '.primary-color' => [
                'color' => $primaryColor
            ],
            '.secondary-color' => [
                'color' => $secondaryColor
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
    
    public function getCSSMediaRetina() {
        return [];
    }
    
}
