<?php

namespace Them\Common\Styling;

use Them\Common\Options;
use Them\Helpers;

class General extends Options {
    
    public function getBodyColor(){
        return $this->options['body-color'];
    }
    
    public function getLinkColor(){
        return $this->options['link-color'];
    }
    
    public function getLinkHoverColor(){
        return $this->options['link-hover-color'];
    }
    
    public function getBackgroundColor(){
        return $this->options['page-background-color'];
    }
    
    public function getBackgroundImage(){
        return $this->options['page-background-image'];
    }

}
