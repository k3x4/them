<?php

namespace Them\Header\Main\Layout;

use Them\Header;

class Horizontal extends Header\Main\Layout implements IHeaderOrientation {
    
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
