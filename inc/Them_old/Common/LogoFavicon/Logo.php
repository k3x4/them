<?php

namespace Them\Common\LogoFavicon;

use Them\Common\Options;

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
        return $this->options['padding'];
    }

}
