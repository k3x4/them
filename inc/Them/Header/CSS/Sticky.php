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
                '.sticky-wrapper' => [
                    'top' => '-100%',
                    '-webkit-transition' => '1s all ease',
                    '-moz-transition' => '1s all ease',
                    'transition' => '1s all ease',
                ],
                '.sticky-active' => [
                    'top' => '0',
                    'position' => 'fixed',
                    'width' => '100%',
                    'z-index' => '100',
                ],
                '.sticky-wrapper .header' => [
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
