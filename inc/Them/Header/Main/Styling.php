<?php

namespace Them\Header\Main;

use Them\Options;
use Them\Helpers;

class Styling extends Options {
    
    public function getHeaderBackground() {
        return Helpers\Converter::Background(__CLASS__, 'background-header');
    }
    
    public function getContainerBackground(){
        return Helpers\Converter::Background(__CLASS__, 'background-container');
    }
    
}
