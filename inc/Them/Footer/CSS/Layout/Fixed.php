<?php

namespace Them\Footer\CSS\Layout;

use Them\Footer;
use Them\Helpers;
use Them\ICSS;

class Fixed extends Footer\Main\Layout implements ICSS{
    
    public function getCSS() {
        return [];
    }

    public function getCSSMedia() {
        $CSS = new Helpers\CSS;
        
        $queries = [];
        $tag = '.footer.container';

        if($this->containerSize > BOOTSTRAP_LARGE_BREAKPOINT){
            $queries = $CSS->makeMediaCSS(new Helpers\Media\LargeMediaCSS, $tag, $this->containerSize);
            return $queries;
        }
        
        if($this->containerSize > BOOTSTRAP_MEDIUM_BREAKPOINT){
            $queries = $CSS->makeMediaCSS(new Helpers\Media\MediumMediaCSS, $tag, $this->containerSize);
            return $queries;
        }
        
        if($this->containerSize > BOOTSTRAP_SMALL_BREAKPOINT){
            $queries = $CSS->makeMediaCSS(new Helpers\Media\SmallMediaCSS, $tag, $this->containerSize);
            return $queries;
        }
        
        return $queries;
    }
    
}
