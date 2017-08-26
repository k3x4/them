<?php

namespace Them\Content\Main;

use Them\Options;
use Them\Helpers;

class Styling extends Options {
    
    public function getWrapperBackground(){
        return Helpers\Converter::Background(__CLASS__, 'background-wrapper');
    }
    
    public function getBlocksBackground(){
        return Helpers\Converter::Background(__CLASS__, 'background-blocks');
    }

}
