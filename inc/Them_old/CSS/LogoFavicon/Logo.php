<?php

namespace Them\CSS\LogoFavicon;

use Them\Common\LogoFavicon;
use Them\CSS\ICSS;
use Them\Helpers;

class Logo implements ICSS {
     
    public function getCSS() {
        $logo = new LogoFavicon\Logo;
        
        $logoPadding = $logo->getPadding();  
        $logoPadding = Helpers\Converter::spacingToCSS($logoPadding, 'padding');
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.logo-col' => [
                'padding' => $logoPadding
            ]
        ];
        return $cssBlocks;
    }

    public function getCSSMedia() {
        return [];
    }
    
}
