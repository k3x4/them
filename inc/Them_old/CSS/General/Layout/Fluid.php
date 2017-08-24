<?php

namespace Them\CSS\General\Layout;

use Them\Common\General;
use Them\CSS\ICSS;

class Fluid implements ICSS{
    
    private $general;
    
    public function __construct() {
        $this->general = new General\Layout;
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
