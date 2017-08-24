<?php

namespace Them\CSS;

use Them\Helpers;

class Footer implements ICSS{
    
    public function getCSS() {
        $CSS = new Helpers\CSS;
        $CSS->addCSS(new Footer\Layout);
        return $CSS->getCSS();
    }

    public function getCSSMedia() {
        $CSS = new Helpers\CSS;
        $CSS->addCSSMedia(new Footer\Layout);
        return $CSS->getCSSMedia();
    }
    
}
