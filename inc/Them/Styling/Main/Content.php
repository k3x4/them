<?php

namespace Them\Styling\Main;

use Them\Options;
use Them\Helpers;

class Content extends Options {
    
    public function getWrapperBackgroundColor(){
        return Helpers\Converter::RGBAToColor($this->options['wrapper-background-color']);
    }
    
    public function getBlocksBackgroundColor(){
        return Helpers\Converter::RGBAToColor($this->options['blocks-background-color']);
    }

}
