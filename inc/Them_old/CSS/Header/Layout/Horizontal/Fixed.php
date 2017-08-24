<?php

namespace Them\CSS\Header\Layout\Horizontal;

use Them\Common\Header;
use Them\Helpers;
use Them\CSS\Media;
use Them\CSS\ICSS;

class Fixed extends Header\Layout implements ICSS{
    
    public function getCSS() {
        $header = new Header\Layout;
        $padding = $header->getPadding();
        
        $padding = Helpers\Converter::spacingToCSS($padding, 'padding');
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.header.container' => [
                'padding' => $padding
            ]
        ];
        return $cssBlocks;
    }

    public function getCSSMedia() {
        $CSS = new Helpers\CSS;
        
        $queries = [];
        $tag = '.header.container';

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
