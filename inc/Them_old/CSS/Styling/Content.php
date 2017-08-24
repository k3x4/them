<?php

namespace Them\CSS\Styling;

use Them\Common\Styling;
use Them\CSS\ICSS;

class Content implements ICSS {
     
    public function getCSS() {
        $content = new Styling\Content;
        
        $backgroundColor = $content->getBackgroundColor();
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.content.container, .content.container-fluid' => [
                'background-color' => $backgroundColor['color']
            ]
        ];
        
        if(isset($backgroundColor['rgba'])):
        $cssBlocks[] = [
            '.content.container, .content.container-fluid' => [
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
