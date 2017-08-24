<?php

namespace Them\Typography\Main;

use Them\Options;

class Menu extends Options {
    
    public function getMenuItemsFont(){
        return $this->options['items-font'];
    }
    
    public function fontOverride(){
        return filter_var($this->options['items-override-font'], FILTER_VALIDATE_BOOLEAN);
    }
    
}
