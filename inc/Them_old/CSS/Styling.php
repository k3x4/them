<?php

namespace Them\CSS;

use Them\Helpers;

class Styling implements ICSS {
    
    public function getCSS() {
        $CSS = new Helpers\CSS;
        $CSS->addCSS(new Styling\General);
        $CSS->addCSS(new Styling\Header);
        $CSS->addCSS(new Styling\Content);
        $CSS->addCSS(new Styling\Footer);
        return $CSS->getCSS();
    }

    public function getCSSMedia() {
        $CSS = new Helpers\CSS;
        $CSS->addCSSMedia(new Styling\General);
        $CSS->addCSSMedia(new Styling\Header);
        $CSS->addCSSMedia(new Styling\Content);
        $CSS->addCSSMedia(new Styling\Footer);
        return $CSS->getCSSMedia();
    }

}
