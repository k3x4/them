<?php

namespace Them\Header\Main\Menu;

use Them\Header;

class Vertical extends Header\Main\Menu implements IMenuOrientation {
    
    public function getWidth(){
        return $this->options['orientation-v-width']['width'];
    }
    
    public function getHeight(){
        return 0;
    }
    
}
