<?php

namespace Them\Header\Main;

use Them\Options;
use Them\Helpers;

class Menu extends Options {
    
    public function getPadding(){
        return $this->options['padding'];
    }
    
    public function getPaddingItems(){
        return $this->options['padding-items'];
    }
    
    public function customWidth(){
        return filter_var($this->options['custom-width'], FILTER_VALIDATE_BOOLEAN);
    }

    public function customHeight(){
        return filter_var($this->options['custom-height'], FILTER_VALIDATE_BOOLEAN);
    }

    public function getWidth(){
        $headerLayout = new Layout;
        $orientationName = $headerLayout->getOrientationName();
        $orientationClass = Helpers\Factory::make(__CLASS__, $orientationName);
        return $orientationClass->getWidth();
    }
    
    public function getHeight(){
        $headerLayout = new Layout;
        $orientationName = $headerLayout->getOrientationName();
        $orientationClass = Helpers\Factory::make(__CLASS__, $orientationName);
        return $orientationClass->getHeight();
    }

}
