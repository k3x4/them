<?php

namespace Them\Header\Main\Menu;

use Them\Header;

class Horizontal extends Header\Main\Menu implements IMenuOrientation {
    
    public function getWidth(){
        return 0;
    }
    
    public function getHeight(){
        return $this->options['orientation-h-height']['height'];
    }
    
}
