<?php

namespace Them\CSS\Header\Menu;

use Them\CSS\ICSS;
use Them\Common\Header;

class Horizontal implements ICSS {
   
    public function getCSS() {
        $menu = new Header\Menu;
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
    
}
