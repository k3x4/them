<?php

namespace Them\General\Main;

use Them\Options;
use Them\Helpers;
use Them\Sidebars;

class Layout extends Options {
    
    public function getGeneralPadding(){
        return $this->options['general-padding'];
    }
    
}
