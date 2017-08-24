<?php

namespace Them\Styling\CSS;

use Them\Styling;
use Them\ICSS;

class Footer implements ICSS {
     
    public function getCSS() {
        $footer = new Styling\Main\Footer;
        
        $backgroundColor = $footer->getBackgroundColor();
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.footer.container, .footer.container-fluid' => [
                'background-color' => $backgroundColor['color']
            ]
        ];
        
        if(isset($backgroundColor['rgba'])):
        $cssBlocks[] = [
            '.footer.container, .footer.container-fluid' => [
                'background-color' => $backgroundColor['rgba']
            ]
        ];
        endif;
        
        return $cssBlocks;
    }

    public function getCSSMedia() {
        return [];
    }
    
}
