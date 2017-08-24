<?php

namespace Them\Styling\Main;

use Them\Options;
use Them\Helpers;

class Header extends Options {
    
    public function getHeaderBackgroundColor(){
        return Helpers\Converter::RGBAToColor($this->options['background-header-color']);
    }
    
    public function getMenuBackgroundColor(){
        return Helpers\Converter::RGBAToColor($this->options['background-menu-color']);
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
        return Helpers\Converter::RGBAToColor($this->options['menu-items-background-color']);
    }
    
    public function menuItemsHoverBackgroundChange(){
        return $this->options['menu-items-background-hover-color-enable'];
    }
    
    public function getMenuItemsBackgroundHoverColor(){
        return Helpers\Converter::RGBAToColor($this->options['menu-items-background-hover-color']);
    }
    
    public function getMenuSubitemsTextColor(){
        return $this->options['menu-subitems-text-color'];
    }
    
    public function menuSubitemsHoverTextChange(){
        return $this->options['menu-subitems-text-hover-color-enable'];
    }
    
    public function getMenuSubitemsTextHoverColor(){
        return $this->options['menu-subitems-text-hover-color'];
    }
    
    public function getMenuSubitemsBackgroundColor(){
        return Helpers\Converter::RGBAToColor($this->options['menu-subitems-background-color']);
    }
    
    public function menuSubitemsHoverBackgroundChange(){
        return $this->options['menu-subitems-background-hover-color-enable'];
    }
    
    public function getMenuSubitemsBackgroundHoverColor(){
        return Helpers\Converter::RGBAToColor($this->options['menu-subitems-background-hover-color']);
    }
    
}
