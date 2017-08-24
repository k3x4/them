<?php

namespace Them\CSS\Header\Layout\Vertical;

use Them\Common\Header;
use Them\CSS\ICSS;

class VerticalOneLeft implements ICSS {
    
    private $class;
    
    public function __construct() {
        $this->class = '.' . ORIENTATION_VERTICAL_TYPE1_LEFT;
    }
    
    public function getCSS(){
        return [];
    }
    
    public function getCSSMedia(){
        $header = new Header\Layout;
        $menu = new Header\Menu;
        
        $width = $header->getWidth();
        
        /*$headerPadding = $header->getPadding();
        $menuPadding = $menu->getPadding();
        
        $padding = intval($headerPadding['padding-left']) + intval($menuPadding['padding-left']);
        $left = $width - ($padding * 2);
        */
        return [
            'body.them-' . ORIENTATION_VERTICAL_TYPE1_LEFT => [
                'padding-left' => $width
            ],
            $this->class => [
                'left'  => '0',
                'position' => 'fixed'
            ],
            $this->class . ' .main-navigation ul li:hover > ul, ' .
            $this->class . ' .main-navigation ul li:focus > ul' => [
                'left' => $width
            ]
        ];
    }
    
}
