<?php

namespace Them\Typography\CSS;

use Them\Typography;
use Them\Header;
use Them\ICSS;
use Them\Helpers;

class Menu implements ICSS {
    
    public function __construct() {
        $header = new Header\Main\Layout;
        $orientation = $header->getOrientationName();
        $this->type = Helpers\Factory::make(__CLASS__, $orientation);
    }
    
    private function generalCSS(){
        $menu = new Typography\Main\Menu;
        $cssBlocks = [];
        
        $fontOverride = $menu->fontOverride();
        
        if($fontOverride):
        $itemsFont = $menu->getMenuItemsFont();
        
        $fontCSS = Helpers\Converter::fontToCSS($itemsFont);

        $cssBlocks[] = [
            '.main-navigation .nav-menu li a' => [
                'font' => $fontCSS
            ]
        ];
        endif;
        
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
