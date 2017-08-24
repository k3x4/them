<?php

namespace Them\Styling\CSS;

use Them\Styling;
use Them\ICSS;

class General implements ICSS {
     
    public function getCSS() {
        $general = new Styling\Main\General;
        
        $bodyColor = $general->getBodyColor();
        $linkColor = $general->getLinkColor();
        $linkHoverColor = $general->getLinkHoverColor();
        $backgroundColor = $general->getBackgroundColor();
        if( ! isset($backgroundColor['color']) ){
            $backgroundColor['color'] = 'transparent';
        }
        
        $cssBlocks = [];
        $cssBlocks[] = [
            'html, body' => [
                'color' => $bodyColor
            ],
            'a, a:visited' => [
                'color' => $linkColor
            ],
            'a:hover, a:focus' => [
                'color' => $linkHoverColor
            ],
            'body #page' => [
                'background-color' => $backgroundColor['color']
            ]
        ];
        
        if(isset($backgroundColor['rgba'])):
        $cssBlocks[] = [
            'body #page' => [
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
