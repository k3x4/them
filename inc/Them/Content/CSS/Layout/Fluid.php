<?php

namespace Them\Content\CSS\Layout;

use Them\Content;
use Them\ICSS;

class Fluid implements ICSS{
    
    private $content;
    
    public function __construct() {
        $this->content = new Content\Main\Layout;
    }
    
    public function getCSS() {
        $containerSize = $this->content->getContainerSize();
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
