<?php

namespace Them\Common\Header\Layout;

use Them\Common\Header;

class Vertical extends Header\Layout implements IHeaderOrientation {
    
    public function getWidth(){
        return $this->options['orientation-v-width']['width'];
    }
    
    public function getWidthUnits(){
        return $this->options['orientation-v-width']['units'];
    }
    
    public function getHeight(){
        return 0;
    }
    
    public function getHeightUnits(){
        return '';
    }
    
}
