<?php

namespace Them\General\CSS\Layout;

use Them\General;
use Them\ICSS;

class Fluid implements ICSS{
    
    private $general;
    
    public function __construct() {
        $this->general = new General\Main\Layout;
    }
    
    public function getCSS() {
        $containerSize = $this->general->getContainerSize();
        $cssBlocks = [];
        $cssBlocks[] = [
            '.content.container-fluid' => [
                'width' => $containerSize . '%'
            ]
        ];
        return $cssBlocks;
    }

    public function getCSSMedia() {
        return [];
    }
    
}
