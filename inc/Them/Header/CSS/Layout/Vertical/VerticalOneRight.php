<?php

namespace Them\Header\CSS\Layout\Vertical;

use Them\Header;
use Them\ICSS;

class VerticalOneRight implements ICSS {
    
    private $class;
    
    public function __construct() {
        $this->class = '.' . ORIENTATION_VERTICAL_TYPE1_RIGHT;
    }
    
    public function getCSS(){
        return [];
    }
    
    public function getCSSMedia(){
        $header = new Header\Main\Layout;
        $width = $header->getWidth();
        return [
            'body.them-' . ORIENTATION_VERTICAL_TYPE1_RIGHT => [
                'padding-right' => $width
            ],
            $this->class => [
                'left' => 'auto',
                'right'  => '0',
                'position' => 'fixed'
            ],
            $this->class . ' .main-navigation ul li:hover > ul, ' .
            $this->class . ' .main-navigation ul li:focus > ul' => [
                'right' => $width
            ] 
        ];
    }
    
    public function getCSSMediaRetina() {
        return [];
    }
    
}
