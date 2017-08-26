<?php

namespace Them\Styling\Main;

use Them\Options;
use Them\Helpers;

class Content extends Options {
    
    public function getWrapperBackground(){
        return Helpers\Converter::Background(__CLASS__, 'background-wrapper');
    }
    
    public function getBlocksBackground(){
        return Helpers\Converter::Background(__CLASS__, 'background-blocks');
    }

}
