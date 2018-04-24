<?php

namespace Them\Header\CSS\Layout\Horizontal;

use Them\Header;
use Them\ICSS;
use Them\Helpers;

class Fluid extends Header\Main\Layout implements ICSS{
    
    public function getCSS() {
        $header = new Header\Main\Layout;
        
        $wrapperPadding = $header->getWrapperPadding();
        $wrapperPadding = Helpers\Converter::spacingToCSS($wrapperPadding, 'padding');
        
        $mainPadding = $header->getWrapperPadding();
        $mainPadding = Helpers\Converter::spacingToCSS($mainPadding, 'padding');
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.header-wrapper.container-fluid' => [
                'width' => $this->containerSize . '%',
                'padding' => $wrapperPadding
            ],
            '.header.container-fluid' => [
                'padding' => $mainPadding
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
