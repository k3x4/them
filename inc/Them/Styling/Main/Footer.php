<?php

namespace Them\Styling\Main;

use Them\Options;
use Them\Helpers;

class Footer extends Options {
    
    public function getFooterBackgroundColor(){
        return Helpers\Converter::RGBAToColor($this->options['background-footer-color']);
    }
    
    public function getContainerBackgroundColor(){
        return Helpers\Converter::RGBAToColor($this->options['background-container-color']);
    }
    
    public function getWidgetsBackgroundColor(){
        return Helpers\Converter::RGBAToColor($this->options['background-widgets-color']);
    }
    
    public function getWidgetsTextColor(){
        return $this->options['widgets-text-color'];
    }
    
    public function widgetsLinksTextColorOverride(){
        return $this->options['widgets-links-text-override-color-enable'];
    }
    
    public function getWidgetsLinksTextColor(){
        return $this->options['widgets-links-text-color'];
    }
    
    public function widgetsLinksTextColorHoverChange(){
        return $this->options['widgets-links-text-hover-color-enable'];
    }
    
    public function getWidgetsLinksTextHoverColor(){
        return $this->options['widgets-links-text-hover-color'];
    }

}
