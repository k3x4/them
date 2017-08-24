<?php

namespace Them\Styling\Main;

use Them\Options;
use Them\Helpers;

class Footer extends Options {
    
    public function getBackgroundColor(){
        return $this->options['background-color'];
    }

}
