<?php

namespace Them\CSS\Footer;

use Them\Common\Footer;
use Them\CSS\ICSS;
use Them\Helpers;

class Layout implements ICSS{
    
    private $type;
    
    public function __construct() {
        $footer = new Footer\Layout;
        $containerType = $footer->getContainerType();
        $this->type = Helpers\Factory::make(__CLASS__, $containerType);
    }
    
    private function generalCSS(){
        $footer = new Footer\Layout;
        $padding = $footer->getPadding();
        $paddingWidgets = $footer->getPaddingWidgets();
        
        $padding = Helpers\Converter::spacingToCSS($padding, 'padding');
        $paddingWidgets = Helpers\Converter::spacingToCSS($paddingWidgets, 'padding');
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.footer.container, .footer.container-fluid' => [
                'padding' => $padding
            ],
            '.footer.container .widget-area, .footer.container-fluid .widget-area' => [
                'padding' => $paddingWidgets,
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
    
}
