<?php

namespace Them\CSS\Footer\Layout;

use Them\Common\Footer;
use Them\CSS\ICSS;

class Fluid extends Footer\Layout implements ICSS{
    
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
    
}
