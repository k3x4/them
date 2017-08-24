<?php

namespace Them\CSS;

use Them\Helpers;

class Typography implements ICSS{
    
    public function getCSS() {
        $CSS = new Helpers\CSS;
        $CSS->addCSS(new Typography\Menu);
        return $CSS->getCSS();
    }

    public function getCSSMedia() {
        $CSS = new Helpers\CSS;
        $CSS->addCSSMedia(new Typography\Menu);
        return $CSS->getCSSMedia();
    }
    
}
