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
    
    public function getDefaultLogo() {
        return $this->options['default'];
    }
    
    public function getDefaultRetinaLogo() {
        return $this->options['default-retina'];
    }
    
    public function customWidthEnable(){
        return filter_var($this->options['default-custom-width'], FILTER_VALIDATE_BOOLEAN);
    }
    
    public function customHeightEnable(){
        return filter_var($this->options['default-custom-height'], FILTER_VALIDATE_BOOLEAN);
    }
    
    public function getDefaultLogoCustomWidth(){
        return $this->options['default-custom-width-size'];
    }
    
    public function getDefaultLogoCustomHeight(){
        return $this->options['default-custom-height-size'];
    }
    
    public function getDefaultLogoPadding(){
        return $this->options['default-padding'];
    }
    
    public function getDefaultLogoMargin(){
        return $this->options['default-margin'];
    }

}
