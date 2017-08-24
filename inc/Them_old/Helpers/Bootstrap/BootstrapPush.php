<?php

namespace Them\Helpers\Bootstrap;

class BootstrapPush implements BootstrapOffset {
    
    private $offset;
    protected $sidebar;
    
    public function __construct(BootstrapOffset $offset) {
        $this->offset = $offset;
    }
    
    public function width(){
        return $this->offset->width() + $this->left() + $this->right();
    }
    
    protected function left(){
        return 0;
    }
    
    protected function right(){
        return 0;
    }
    
}
