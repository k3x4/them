<?php

namespace Them\CSS\Footer\Layout;

use Them\Common\Footer;
use Them\Helpers;
use Them\CSS\Media;
use Them\CSS\ICSS;

class Fixed extends Footer\Layout implements ICSS{
    
    public function getCSS() {
        return [];
    }

    public function getCSSMedia() {
        $CSS = new Helpers\CSS;
        
        $queries = [];
        $tag = '.footer.container';

        if($this->containerSize > BOOTSTRAP_LARGE_BREAKPOINT){
            $queries = $CSS->makeMediaCSS(new Media\LargeMediaCSS, $tag, $this->containerSize);
            return $queries;
        }
        
        if($this->containerSize > BOOTSTRAP_MEDIUM_BREAKPOINT){
            $queries = $CSS->makeMediaCSS(new Media\MediumMediaCSS, $tag, $this->containerSize);
            return $queries;
        }
        
        if($this->containerSize > BOOTSTRAP_SMALL_BREAKPOINT){
            $queries = $CSS->makeMediaCSS(new Media\SmallMediaCSS, $tag, $this->containerSize);
            return $queries;
        }
        
        return $queries;
    }
    
}
