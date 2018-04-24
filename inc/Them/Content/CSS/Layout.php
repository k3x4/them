<?php

namespace Them\Content\CSS;

use Them\Content;
use Them\Helpers;
use Them\ICSS;

class Layout implements ICSS {
    
    private $type;
    
    public function __construct() {
        $layout = new Content\Main\Layout;
        $containerType = $layout->getContainerType();
        $this->type = Helpers\Factory::make(__CLASS__, $containerType);
    }
    
    private function generalCSS(){
        $layout = new Content\Main\Layout;

        $mainWrapperPadding = $layout->getMainWrapperPadding();
        $mainWrapperPadding = Helpers\Converter::spacingToCSS($mainWrapperPadding, 'padding');
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.content.container, .content.container-fluid' => [
                'padding' => $mainWrapperPadding
            ]
        ];
        return $cssBlocks;
    }
    
    private function generalCSSMedia(){
        return [];
    }
    
    public function getCSS() {
        return array_merge($this->generalCSS(), $this->type->getCSS());
    }

    public function getCSSMedia() {
        $CSS = new Helpers\CSS;
        $generalCSSMedia = $this->generalCSSMedia();
        $typeCSSMedia = $this->type->getCSSMedia();
        return $CSS->mediaMerge($generalCSSMedia, $typeCSSMedia);
    }
    
    public function getCSSMediaRetina() {
        return [];
    }
    
}
