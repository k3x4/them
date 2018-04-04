<?php

namespace Them\LogoFavicon\Main;

use Them\Options;

class Logo extends Options {
    
    public function logoSet($logo){
        if(isset($this->options[$logo]['url']) && $this->options[$logo]['url']){
            return true;
        }
        return false;
    }
    
    public function getLogoURL() {
        return $this->options['default']['url'];
    }
    
    public function getPadding(){
        return $this->options['default-padding'];
    }
    
    public function getMargin(){
        return $this->options['default-margin'];
    }

}
