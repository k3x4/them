<?php

namespace Them\Header\Main;

use Them\Options;
use Them\Helpers;

class Sticky extends Options {
    
    public function stickyEnabled() {
        return filter_var($this->options['default'], FILTER_VALIDATE_BOOLEAN);
    }
    
    public function getHeaderBackground() {
        return Helpers\Converter::Background(__CLASS__, 'background-color');
    }

}
