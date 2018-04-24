<?php

namespace Them\Sidebars;

use Them\Helpers;
use Them\ICSS;

class CSS implements ICSS {
    
    public function getCSS() {
        $CSS = new Helpers\CSS;
        $CSS->addCSS(new CSS\Layout);
        return $CSS->getCSS();
    }

    public function getCSSMedia() {
        $CSS = new Helpers\CSS;
        $CSS->addCSSMedia(new CSS\Layout);
        return $CSS->getCSSMedia();
    }
    
    public function getCSSMediaRetina() {
        $CSS = new Helpers\CSS;
        $CSS->addCSSMediaRetina(new CSS\Layout);
        return $CSS->getCSSMediaRetina();
    }

}

