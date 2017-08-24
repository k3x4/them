<?php

namespace Them\CSS;

use Them\Helpers;

class Header implements ICSS {
    
    public function getCSS() {
        $CSS = new Helpers\CSS;
        $CSS->addCSS(new Header\Layout);
        $CSS->addCSS(new Header\Menu);
        return $CSS->getCSS();
    }

    public function getCSSMedia() {
        $CSS = new Helpers\CSS;
        $CSS->addCSSMedia(new Header\Layout);
        $CSS->addCSSMedia(new Header\Menu);
        return $CSS->getCSSMedia();
    }

}
