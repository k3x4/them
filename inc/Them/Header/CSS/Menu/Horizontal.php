<?php

namespace Them\Header\CSS\Menu;

use Them\ICSS;
use Them\Header;

class Horizontal implements ICSS {
   
    public function getCSS() {
        $menu = new Header\Main\Menu;
        $height = $menu->getHeight();
        $customHeight = $menu->customHeight();
        
        $cssBlocks = [];
        
        if($customHeight):
        $cssBlocks[] = [
            '.main-navigation .nav-menu' => [
                'height' => $height
            ],
        ];
        endif;
        
        return $cssBlocks;
    }

    public function getCSSMedia() {
        return [];
    }
    
    public function getCSSMediaRetina() {
        return [];
    }
    
}
