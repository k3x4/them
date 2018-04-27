<?php

namespace Them\Header\Main;

use Them\Options;
use Them\Helpers;

class Sticky extends Options {
    
    public function stickyEnabled() {
        return filter_var($this->options['default'], FILTER_VALIDATE_BOOLEAN);
    }
    
    public function getJSVars(){
        $vars = [];
        
        $vars['stickyOffset'] = intval($this->options['offset']['height']);
        
        return $vars;
    }
    
    public function getStickyClass(){
        $cssClass = 'sticky-wrapper';
        if($this->stickyEnabled()){
            return $cssClass;
        }
    }
    
    public function getHeaderBackground() {
        return $this->options['background-color'];
    }

}
