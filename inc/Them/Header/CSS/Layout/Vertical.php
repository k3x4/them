<?php

namespace Them\Header\CSS\Layout;

use Them\ICSS;
use Them\Header;
use Them\Helpers;

class Vertical implements ICSS {
    
    private $layout;
    private $type;
    private $CSS;
    private $CSSMedia;

    public function __construct() {
        $header = new Header\Main\Layout;
        
        $layoutName = $header->getLayoutName();
        $this->type = Helpers\Factory::make(__CLASS__, $layoutName);
        
        $layout = $header->getLayout();
        $this->layout = '.' . $layout;
        $this->CSSMedia = $this->generalCSSMedia();
    }

    private function generalCSS(){
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
    
    private function generalCSSMedia(){
        $header = new Header\Main\Layout;
        $width = $header->getWidth();
        
        return [
            $this->layout => [
                'width' => $width,
                'height' => '100%',
                //'top' => '0',
                'z-index' => '1000'
            ],
            $this->layout . ' .container' => [
                'padding' => '0', //$padding,
                'width' => '100%',
                'text-align' => 'center',
            ],
            $this->layout . ' .container div,' .
            $this->layout . ' .container-fluid,' .
            $this->layout . ' .container-fluid div' => [
                'width' => '100%',
                'text-align' => 'center',
                'padding-left' => '0',
                'padding-right' => '0'
            ],
            $this->layout . ' .row' => [
                'margin-left' => '0',
                'margin-right' => '0'
            ],
            $this->layout . ' .main-navigation ul li' => [
                'float' => 'none',
                'display' => 'inline-block',
                'width' => '100%'
            ],
            $this->layout . ' .main-navigation ul li > ul' => [
                'background-color' => '#fff',
                'top' => '0'
            ],
            $this->layout . ' .them-menu-toggle' => [
                'position' => 'absolute',
                'top' => '20px',
                'padding-top' => '15px',
                'display' => 'block',
                'width' => '28px',
                'height' => '30px',
                'z-index' => '1050'
            ],
            $this->layout . ' .them-menu-toggle:focus' => [
                'outline' => 'none'
            ],
            $this->layout . ' .them-menu-toggle span:before,' .
            $this->layout . ' .them-menu-toggle span:after' => [
                'content' => '""',
                'position' => 'absolute',
                'left' => '0'
            ],
            $this->layout . ' .them-menu-toggle span:before' => [
                'top' => '-9px'
            ],
            $this->layout . ' .them-menu-toggle span:after' => [
                'top' => '9px'
            ],
            $this->layout . ' .them-menu-toggle span' => [
                'position' => 'relative',
                'display' => 'block'
            ],
            $this->layout . ' .them-menu-toggle span,' .
            $this->layout . ' .them-menu-toggle span:before,' .
            $this->layout . ' .them-menu-toggle span:after' => [
                'width' => '100%',
                'height' => '1px',
                'background-color' => '#888'
            ]
        ];
    }
    
    public function getCSS() {
        return array_merge($this->generalCSS(), $this->type->getCSS());
    }

    public function getCSSMedia() {
        $media = [];
        $CSS = $this->type->getCSSMedia();
        $media[BOOTSTRAP_VERTICAL_MENU_BREAKPOINT][] = array_merge_recursive($this->CSSMedia, $CSS);
        return $media;
    }

}
