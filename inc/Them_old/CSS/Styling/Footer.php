<?php

namespace Them\CSS\Styling;

use Them\Common\Styling;
use Them\CSS\ICSS;

class Footer implements ICSS {
     
    public function getCSS() {
        $footer = new Styling\Footer;
        
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
