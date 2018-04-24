<?php

namespace Them\Sidebars\CSS;

use Them\Sidebars;
use Them\Helpers;
use Them\ICSS;

class Layout implements ICSS {
    
    private $type;
    
    public function __construct() {
        $sidebars = new Sidebars\Main\Layout;
        $scheme = $sidebars->getSchemeName();
        $this->type = Helpers\Factory::make(__CLASS__, $scheme);
    }
    
    private function generalCSS(){
        $cssBlocks = [];
        $cssBlocks[] = [
            '.content.container .content-area-wrapper #main > *, ' .
            '.content.container-fluid .content-area-wrapper #main > *, ' .
            '.content.container .widget-area > *, ' .
            '.content.container-fluid .widget-area > *' => [
                'overflow' => 'hidden'
            ],
        ];

        return $cssBlocks;
    }
    
    private function generalCSSMedia(){
        return [];
    }
    
    public function getCSS() {
        $generalCSS = $this->generalCSS();
        $typeCSS = $this->type->getCSS();
        return array_merge($generalCSS, $typeCSS);
    }

    public function getCSSMedia() {
        $CSS = new Helpers\CSS;
        $generalCSSMedia = $this->generalCSSMedia();
        $typeCSSMedia = $this->type->getCSSMedia();
        return $CSS->mediaMerge($generalCSSMedia, $typeCSSMedia);
    }
    
    public function getCSSMediaRetina() {
        return [];
    }
    
}
