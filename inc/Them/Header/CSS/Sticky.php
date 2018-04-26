<?php

namespace Them\Header\CSS;

use Them\Header;
use Them\ICSS;

class Sticky implements ICSS {

    public function getCSS() {
        $sticky = new Header\Main\Sticky;
        
        $background = $sticky->getHeaderBackground();

        $cssBlocks = [];

        if ($sticky->stickyEnabled()) {

            $cssBlocks[] = [
                '.site-header .header-wrapper .header' => [
                    'position' => 'fixed',
                    'z-index' => '100',
                    'background-color' => $background
                ]
            ];
        }

        return $cssBlocks;
    }

    public function getCSSMedia() {
        return [];
    }

    public function getCSSMediaRetina() {
        return [];
    }

}
