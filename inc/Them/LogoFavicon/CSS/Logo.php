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
        
        $logoMargin = $logo->getMargin();  
        $logoMargin = Helpers\Converter::spacingToCSS($logoMargin, 'margin');
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.logo-col' => [
                'padding' => $logoPadding,
                'margin' => $logoMargin
            ]
        ];
        return $cssBlocks;
    }

    public function getCSSMedia() {
        return [];
    }
    
}
