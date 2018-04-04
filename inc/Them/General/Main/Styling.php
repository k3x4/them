<?php

namespace Them\General\Main;

use Them\Options;
use Them\Helpers;

class Styling extends Options {
    
    public function getBodyColor(){
        return $this->options['body-color'];
    }
    
    public function getPrimaryColor(){
        return $this->options['primary-color'];
    }
    
    public function getSecondaryColor(){
        return $this->options['secondary-color'];
    }
    
    public function getLinkColor(){
        return $this->options['link-color'];
    }
    
    public function getLinkHoverColor(){
        return $this->options['link-hover-color'];
    }
    
    public function getPageBackground(){
        return Helpers\Converter::Background(__CLASS__, 'background-page');
    }

}
