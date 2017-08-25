<?php

namespace Them\Sidebars\CSS;

use Them\Sidebars;
use Them\Helpers;
use Them\ICSS;

class Layout implements ICSS {
    
    private $type;
    
    public function __construct() {
        $sidebars = new Sidebars\Main\Layout;
        $scheme = $sidebars->getSchemeName();
        $this->type = Helpers\Factory::make(__CLASS__, $scheme);
    }
    
    public function getCSS() {
        return $this->type->getCSS();
    }

    public function getCSSMedia() {
        return $this->type->getCSSMedia();
    }
    
}
