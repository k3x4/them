<?php

namespace Them\Header\CSS\Layout\Vertical;

use Them\ICSS;

class VerticalTwoLeft implements ICSS {
    
    private $class;
    
    public function __construct() {
        $this->class = '.' . ORIENTATION_VERTICAL_TYPE2_LEFT;
    }
    
    public function getCSS(){
        return [];
    }
    
    public function getCSSMedia(){
        return [
            'body.them-' . ORIENTATION_VERTICAL_TYPE2_LEFT => [
                'padding-left' => '50px'
            ],
            $this->class => [
                'left'  => '-200px',
                'position' => 'fixed',
                '-webkit-transition' => 'left .5s ease-in-out',
                '-moz-transition' => 'left .5s ease-in-out',
                '-o-transition' => 'left .5s ease-in-out',
                'transition' => 'left .5s ease-in-out'
            ],
            $this->class . '.active' => [
                'left'  => '0'
            ],
            $this->class . ' .main-navigation ul li:hover > ul, ' .
            $this->class . ' .main-navigation ul li:focus > ul' => [
                'left' => '250px'
            ],
            $this->class . ' .them-menu-toggle' => [
                'right' => '11px'
            ]    
        ];
    }
    
    public function getCSSMediaRetina() {
        return [];
    }
    
}
