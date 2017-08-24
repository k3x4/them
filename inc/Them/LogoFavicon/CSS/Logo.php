<?php

namespace Them\LogoFavicon\CSS;

use Them\LogoFavicon;
use Them\ICSS;
use Them\Helpers;

class Logo implements ICSS {
     
    public function getCSS() {
        $logo = new LogoFavicon\Main\Logo;
        
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
