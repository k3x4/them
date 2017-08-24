<?php

namespace Them\Styling;

use Them\ICSS;

use Them\Helpers;

class CSS implements ICSS {
    
    public function getCSS() {
        $CSS = new Helpers\CSS;
        $CSS->addCSS(new CSS\General);
        $CSS->addCSS(new CSS\Header);
        $CSS->addCSS(new CSS\Content);
        $CSS->addCSS(new CSS\Footer);
        return $CSS->getCSS();
    }

    public function getCSSMedia() {
        $CSS = new Helpers\CSS;
        $CSS->addCSSMedia(new CSS\General);
        $CSS->addCSSMedia(new CSS\Header);
        $CSS->addCSSMedia(new CSS\Content);
        $CSS->addCSSMedia(new CSS\Footer);
        return $CSS->getCSSMedia();
    }

}

