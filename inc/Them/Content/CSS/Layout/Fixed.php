<?php

namespace Them\Content\CSS\Layout;

use Them\Content;
use Them\Helpers;
use Them\ICSS;

class Fixed implements ICSS{
    
    private $content;
    
    public function __construct() {
        $this->content = new Content\Main\Layout;
    }
    
    public function getCSS() {
        return [];
    }

    public function getCSSMedia() {
        $CSS = new Helpers\CSS;
        
        $queries = [];
        $tag = '.content.container';
        $containerSize = $this->content->getContainerSize();

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
    
    public function getCSSMediaRetina() {
        return [];
    }
    
}
