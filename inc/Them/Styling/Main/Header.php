<?php

namespace Them\Styling\Main;

use Them\Options;
use Them\Helpers;

class Header extends Options {
    
    public function getHeaderBackgroundColor(){
        return $this->options['background-header-color'];
    }
    
    public function getMenuBackgroundColor(){
        return $this->options['background-menu-color'];
    }
    
    public function getMenuItemsTextColor(){
        return $this->options['menu-items-text-color'];
    }
    
    public function menuItemsHoverTextChange(){
        return $this->options['menu-items-text-hover-color-enable'];
    }
    
    public function getMenuItemsTextHoverColor(){
        return $this->options['menu-items-text-hover-color'];
    }
    
    public function getMenuItemsBackgroundColor(){
        return $this->options['menu-items-background-color'];
    }
    
    public function menuItemsHoverBackgroundChange(){
        return $this->options['menu-items-background-hover-color-enable'];
    }
    
    public function getMenuItemsBackgroundHoverColor(){
        return $this->options['menu-items-background-hover-color'];
    }

}
