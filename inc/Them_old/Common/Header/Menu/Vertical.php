<?php

namespace Them\Common\Header\Menu;

use Them\Common\Header;

class Vertical extends Header\Menu implements IMenuOrientation {
    
    public function getWidth(){
        return $this->options['orientation-v-width']['width'];
    }
    
    public function getHeight(){
        return 0;
    }
    
}
