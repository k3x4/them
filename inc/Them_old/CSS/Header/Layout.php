<?php

namespace Them\CSS\Header;

use Them\Common\Header;
use Them\Helpers;
use Them\CSS\ICSS;

class Layout implements ICSS {
    
    private $type;
    
    public function __construct() {
        $header = new Header\Layout;
        $orientation = $header->getOrientationName();
        $this->type = Helpers\Factory::make(__CLASS__, $orientation);
    }
    
    public function getCSS() {
        return $this->type->getCSS();
    }

    public function getCSSMedia() {
        return $this->type->getCSSMedia();
    }
    
}
