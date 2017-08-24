<?php

namespace Them;

use Them\Helpers;

class Options {
    
    protected $options;

    public function __construct() {
        $className = get_class($this);
        $this->options = Helpers\Registry::getOptions($className);
    }
    
}
