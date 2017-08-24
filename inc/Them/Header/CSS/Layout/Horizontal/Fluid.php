<?php

namespace Them\Header\CSS\Layout\Horizontal;

use Them\Header;
use Them\ICSS;
use Them\Helpers;

class Fluid extends Header\Layout implements ICSS{
    
    public function getCSS() {
        $header = new Header\Main\Layout;
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
