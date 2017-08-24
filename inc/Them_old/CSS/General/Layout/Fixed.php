<?php

namespace Them\CSS\General\Layout;

use Them\Common\General;
use Them\Helpers;
use Them\CSS\Media;
use Them\CSS\ICSS;

class Fixed implements ICSS{
    
    private $general;
    
    public function __construct() {
        $this->general = new General\Layout;
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
            $queries = $CSS->makeMediaCSS(new Media\LargeMediaCSS, $tag, $containerSize);
            return $queries;
        }
        
        if($containerSize > BOOTSTRAP_MEDIUM_BREAKPOINT){
            $queries = $CSS->makeMediaCSS(new Media\MediumMediaCSS, $tag, $containerSize);
            return $queries;
        }
        
        if($containerSize > BOOTSTRAP_SMALL_BREAKPOINT){
            $queries = $CSS->makeMediaCSS(new Media\SmallMediaCSS, $tag, $containerSize);
            return $queries;
        }
        
        return $queries;
    }
    
}
