<?php

namespace Them\Header\CSS\Menu;

use Them\ICSS;
use Them\Header;

class Vertical implements ICSS {
    
    private $layout;
    
    public function __construct() {
        $header = new Header\Main\Layout;
        
        $layout = $header->getLayout();
        $this->layout = '.' . $layout;
    }
    
    public function getCSS() {
        $menu = new Header\Main\Menu;
        $width = $menu->getWidth();
        $customWidth = $menu->customWidth();
        
        $cssBlocks = [];
        
        if($customWidth):
        $cssBlocks[] = [
            '.main-navigation .nav-menu' => [
                'width' => $width
            ],
        ];
        endif;
        
        return $cssBlocks;
    }
    
    private function generalCSSMedia(){
        return [
            $this->layout . ' .main-navigation .nav-menu' => [
                'padding' => '0',
            ],
        ];
    }

    public function getCSSMedia() {
        $media = [];
        $media[BOOTSTRAP_VERTICAL_MENU_BREAKPOINT][] = $this->generalCSSMedia();
        return $media;
    }

}
