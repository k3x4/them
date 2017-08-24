<?php

namespace Them\CSS\Header\Layout\Horizontal;

use Them\Common\Header;
use Them\CSS\ICSS;
use Them\Helpers;

class Fluid extends Header\Layout implements ICSS{
    
    public function getCSS() {
        $header = new Header\Layout;
        $padding = $header->getPadding();
        
        $padding = Helpers\Converter::spacingToCSS($padding, 'padding');
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.header.container-fluid' => [
                'width' => $this->containerSize . '%',
                'padding' => $padding
            ]
        ];
        return $cssBlocks;
    }

    public function getCSSMedia() {
        return [];
    }
    
}
