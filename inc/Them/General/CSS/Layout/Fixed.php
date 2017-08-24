<?php

namespace Them\General\CSS\Layout;

use Them\General;
use Them\Helpers;
use Them\ICSS;

class Fixed implements ICSS{
    
    private $general;
    
    public function __construct() {
        $this->general = new General\Main\Layout;
    }
    
    public function getCSS() {
        return [];
    }

    public function getCSSMedia() {
        $CSS = new Helpers\CSS;
        
        $queries = [];
        $tag = '.content.container';
        $containerSize = $this->general->getContainerSize();

        if($containerSize > BOOTSTRAP_LARGE_BREAKPOINT){
            $queries = $CSS->makeMediaCSS(new Helpers\Media\LargeMediaCSS, $tag, $containerSize);
            return $queries;
        }
        
        if($containerSize > BOOTSTRAP_MEDIUM_BREAKPOINT){
            $queries = $CSS->makeMediaCSS(new Helpers\Media\MediumMediaCSS, $tag, $containerSize);
            return $queries;
        }
        
        if($containerSize > BOOTSTRAP_SMALL_BREAKPOINT){
            $queries = $CSS->makeMediaCSS(new Helpers\Media\SmallMediaCSS, $tag, $containerSize);
            return $queries;
        }
        
        return $queries;
    }
    
}
