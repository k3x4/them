<?php

namespace Them\Header\CSS\Layout;

use Them\Header;
use Them\ICSS;
use Them\Helpers;

class Horizontal implements ICSS {

    private $type;
    private $layout;
    
    public function __construct() {
        $header = new Header\Main\Layout;
        $containerType = $header->getContainerType();
        $layoutName = $header->getLayoutName();
        $this->type = Helpers\Factory::make(__CLASS__, $containerType);
        $this->layout = Helpers\Factory::make(__CLASS__, $layoutName);
    }
    
    private function generalCSS(){
        $header = new Header\Main\Layout;
        $height = $header->getHeight();
        $logoVerticalAlign = $header->getLogoVerticalAlign();
        $cssBlocks = [];
        
        if($header->customHeightEnable()):
        $cssBlocks[] = [
            '.header.container' => [
                'height' => $height
            ],
            '.header.container .row' => [
                'height' => '100%',
                'position' => 'relative'
            ],
            '.header.container .row:before' => [
                'content' => '" "',
                'display' => 'inline-block',
                'height' => '100%',
                'width' => '1px',
                'margin-left' => '-5px',
                'vertical-align' => 'middle'
            ],
            '.header.container .row .logo-col' => [
                'display' => 'inline-block',
                'vertical-align' => $logoVerticalAlign
            ],
        ];
        endif;
        
        return $cssBlocks;
    }
    
    private function generalCSSMedia(){
        return [];
    }
   
    public function getCSS() {
        $generalCSS = $this->generalCSS();
        $typeCSS = $this->type->getCSS();
        $layoutCSS = $this->layout->getCSS();
        return array_merge($generalCSS, $typeCSS, $layoutCSS);
    }

    public function getCSSMedia() {
        $CSS = new Helpers\CSS;
        $generalCSSMedia = $this->generalCSSMedia();
        $typeCSSMedia = $this->type->getCSSMedia();
        $layoutCSSMedia = $this->layout->getCSSMedia();
        return $CSS->mediaMerge($generalCSSMedia, $typeCSSMedia, $layoutCSSMedia);
    }
    
}
