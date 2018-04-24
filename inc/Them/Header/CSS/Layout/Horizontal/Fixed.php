<?php

namespace Them\Header\CSS\Layout\Horizontal;

use Them\Header;
use Them\Helpers;
use Them\ICSS;

class Fixed extends Header\Main\Layout implements ICSS{
    
    public function getCSS() {
        $header = new Header\Main\Layout;
        
        $wrapperPadding = $header->getWrapperPadding();
        $wrapperPadding = Helpers\Converter::spacingToCSS($wrapperPadding, 'padding');
        
        $mainPadding = $header->getWrapperPadding();
        $mainPadding = Helpers\Converter::spacingToCSS($mainPadding, 'padding');
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.header-wrapper.container' => [
                'padding' => $wrapperPadding
            ],
            '.header.container' => [
                'padding' => $mainPadding
            ]
        ];
        return $cssBlocks;
    }

    public function getCSSMedia() {
        $CSS = new Helpers\CSS;
        
        $queries = [];
        $tag = '.header-wrapper.container';

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
    
    public function getCSSMediaRetina() {
        return [];
    }
    
}
