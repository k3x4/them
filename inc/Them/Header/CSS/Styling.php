<?php

namespace Them\Header\CSS;

use Them\Header;
use Them\ICSS;

class Styling implements ICSS {
     
    public function getCSS() {
        $styling = new Header\Main\Styling;
        
        $headerBackground = $styling->getHeaderBackground();
        $containerBackground = $styling->getContainerBackground();
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.site-header' => [
                'background' => $headerBackground
            ],
            '.site-header .header' => [
                'background' => $containerBackground
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
