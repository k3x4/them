<?php

namespace Them\Header;

use Them\Helpers;
use Them\ICSS;

class CSS implements ICSS {
    
    public function getCSS() {
        $CSS = new Helpers\CSS;
        $CSS->addCSS(new CSS\Layout);
        $CSS->addCSS(new CSS\Styling);
        $CSS->addCSS(new CSS\Menu);
        return $CSS->getCSS();
    }

    public function getCSSMedia() {
        $CSS = new Helpers\CSS;
        $CSS->addCSSMedia(new CSS\Layout);
        $CSS->addCSSMedia(new CSS\Styling);
        $CSS->addCSSMedia(new CSS\Menu);
        return $CSS->getCSSMedia();
    }
    
    public function getCSSMediaRetina() {
        $CSS = new Helpers\CSS;
        $CSS->addCSSMediaRetina(new CSS\Layout);
        $CSS->addCSSMediaRetina(new CSS\Styling);
        $CSS->addCSSMediaRetina(new CSS\Menu);
        return $CSS->getCSSMediaRetina();
    }

}

