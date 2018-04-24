<?php

namespace Them\Typography;

use Them\Helpers;
use Them\ICSS;

class CSS implements ICSS {
    
    public function getCSS() {
        $CSS = new Helpers\CSS;
        $CSS->addCSS(new CSS\Menu);
        return $CSS->getCSS();
    }

    public function getCSSMedia() {
        $CSS = new Helpers\CSS;
        $CSS->addCSSMedia(new CSS\Menu);
        return $CSS->getCSSMedia();
    }
    
    public function getCSSMediaRetina() {
        $CSS = new Helpers\CSS;
        $CSS->addCSSMediaRetina(new CSS\Menu);
        return $CSS->getCSSMediaRetina();
    }

}

