<?php

namespace Them\Header;

use Them\Helpers;
use Them\ICSS;

class CSS implements ICSS {
    
    public function getCSS() {
        $CSS = new Helpers\CSS;
        $CSS->addCSS(new CSS\Layout);
        $CSS->addCSS(new CSS\Menu);
        return $CSS->getCSS();
    }

    public function getCSSMedia() {
        $CSS = new Helpers\CSS;
        $CSS->addCSSMedia(new CSS\Layout);
        $CSS->addCSSMedia(new CSS\Menu);
        return $CSS->getCSSMedia();
    }

}

