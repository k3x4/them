<?php

namespace Them\Styling\Main;

use Them\Options;
use Them\Helpers;

class Footer extends Options {
    
    public function getFooterBackground(){
        return Helpers\Converter::Background(__CLASS__, 'background-footer');
    }
    
    public function getContainerBackground(){
        return Helpers\Converter::Background(__CLASS__, 'background-container');
    }
    
    public function getWidgetsBackground(){
        return Helpers\Converter::Background(__CLASS__, 'background-widgets');
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
