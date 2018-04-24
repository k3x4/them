<?php

namespace Them\Footer\CSS\Layout;

use Them\Footer;
use Them\ICSS;

class Fluid extends Footer\Main\Layout implements ICSS{
    
    public function getCSS() {
        $cssBlocks = [];
        $cssBlocks[] = [
            '.footer.container-fluid' => [
                'width' => $this->containerSize . '%'
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
