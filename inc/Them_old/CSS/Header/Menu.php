<?php

namespace Them\CSS\Header;

use Them\Common\Header;
use Them\Helpers;
use Them\CSS\ICSS;

class Menu implements ICSS {
    
    private $type;
    
    public function __construct() {
        $header = new Header\Layout;
        $orientation = $header->getOrientationName();
        $this->type = Helpers\Factory::make(__CLASS__, $orientation);
    }
    
    private function generalCSS(){
        $menu = new Header\Menu;
        $paddingUL = $menu->getPadding();
        $paddingItems = $menu->getPaddingItems();
        
        $paddingUL = Helpers\Converter::spacingToCSS($paddingUL, 'padding');
        $paddingItems = Helpers\Converter::spacingToCSS($paddingItems, 'padding');
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.main-navigation .nav-menu' => [
                'padding' => $paddingUL,
                'display' => 'block'
            ],
            '.main-navigation .nav-menu li a' => [
                'padding' => $paddingItems,
                'display' => 'block'
            ]
        ];
        return $cssBlocks;
    }
    
    private function generalCSSMedia(){
        return [];
    }
    
    public function getCSS() {
        return array_merge($this->generalCSS(), $this->type->getCSS());
    }

    public function getCSSMedia() {
        $CSS = new Helpers\CSS;
        $generalCSSMedia = $this->generalCSSMedia();
        $typeCSSMedia = $this->type->getCSSMedia();
        return $CSS->mediaMerge($generalCSSMedia, $typeCSSMedia);
    }
    
}
