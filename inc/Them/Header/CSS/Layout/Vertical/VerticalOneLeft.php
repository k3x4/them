<?php

namespace Them\Header\CSS\Layout\Vertical;

use Them\Header;
use Them\ICSS;

class VerticalOneLeft implements ICSS {
    
    private $class;
    
    public function __construct() {
        $this->class = '.' . ORIENTATION_VERTICAL_TYPE1_LEFT;
    }
    
    public function getCSS(){
        return [];
    }
    
    public function getCSSMedia(){
        $header = new Header\Main\Layout;
        $menu = new Header\Main\Menu;
        
        $width = $header->getWidth();
        
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
