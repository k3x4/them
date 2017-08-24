<?php

namespace Them\CSS\Header\Layout\Vertical;

use Them\CSS\ICSS;

class VerticalTwoRight implements ICSS {
    
    private $class;
    
    public function __construct() {
        $this->class = '.' . ORIENTATION_VERTICAL_TYPE2_RIGHT;
    }
    
    public function getCSS(){
        return [];
    }
    
    public function getCSSMedia(){
        return [
            'body.them-' . ORIENTATION_VERTICAL_TYPE2_RIGHT => [
                'padding-right' => '50px'
            ],
            $this->class => [
                'right'  => '-200px',
                'position' => 'fixed',
                'transition' => 'right .5s ease-in-out'
            ],
            $this->class . '.active' => [
                'right'  => '0'
            ],
            $this->class . ' .main-navigation ul li:hover > ul, ' .
            $this->class . ' .main-navigation ul li:focus > ul' => [
                'right' => '250px'
            ],
            $this->class . ' .them-menu-toggle' => [
                'left' => '11px'
            ]
        ];
    }
    
}
