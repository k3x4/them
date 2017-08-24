<?php

namespace Them\CSS;

use Them\Helpers;

class LogoFavicon implements ICSS{
    
    public function getCSS() {
        $CSS = new Helpers\CSS;
        $CSS->addCSS(new LogoFavicon\Logo);
        return $CSS->getCSS();
    }

    public function getCSSMedia() {
        $CSS = new Helpers\CSS;
        $CSS->addCSSMedia(new LogoFavicon\Logo);
        return $CSS->getCSSMedia();
    }
    
}
