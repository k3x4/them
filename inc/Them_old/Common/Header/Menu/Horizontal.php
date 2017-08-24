<?php

namespace Them\Common\Header\Menu;

use Them\Common\Header;

class Horizontal extends Header\Menu implements IMenuOrientation {
    
    public function getWidth(){
        return 0;
    }
    
    public function getHeight(){
        return $this->options['orientation-h-height']['height'];
    }
    
}
