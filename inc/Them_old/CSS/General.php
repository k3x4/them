<?php

namespace Them\CSS;

use Them\Helpers;

class General implements ICSS{
    
    public function getCSS() {
        $CSS = new Helpers\CSS;
        $CSS->addCSS(new General\Layout);
        return $CSS->getCSS();
    }

    public function getCSSMedia() {
        $CSS = new Helpers\CSS;
        $CSS->addCSSMedia(new General\Layout);
        return $CSS->getCSSMedia();
    }
    
}
