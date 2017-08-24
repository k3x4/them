<?php

namespace Them\Common\Styling;

use Them\Common\Options;
use Them\Helpers;

class Footer extends Options {
    
    public function getBackgroundColor(){
        return $this->options['background-color'];
    }

}
