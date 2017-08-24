<?php

namespace Them\Common\Header\Layout;

use Them\Common\Header;

class Horizontal extends Header\Layout implements IHeaderOrientation {
    
    public function getWidth(){
        return 0;
    }
    
    public function getWidthUnits(){
        return '';
    }
    
    public function getHeight(){
        return $this->options['orientation-h-height']['height'];
    }
    
    public function getHeightUnits(){
        return $this->options['orientation-h-height']['units'];
    }
    
}
