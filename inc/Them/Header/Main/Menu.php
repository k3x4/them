<?php

namespace Them\Header\Main;

use Them\Options;
use Them\Helpers;

class Menu extends Options {
    
    public function getPadding(){
        return $this->options['padding'];
    }
    
    public function getPaddingItems(){
        return $this->options['padding-items'];
    }
    
    public function customWidth(){
        return filter_var($this->options['custom-width'], FILTER_VALIDATE_BOOLEAN);
    }

    public function customHeight(){
        return filter_var($this->options['custom-height'], FILTER_VALIDATE_BOOLEAN);
    }

    public function getWidth(){
        $headerLayout = new Layout;
        $orientationName = $headerLayout->getOrientationName();
        $orientationClass = Helpers\Factory::make(__CLASS__, $orientationName);
        return $orientationClass->getWidth();
    }
    
    public function getHeight(){
        $headerLayout = new Layout;
        $orientationName = $headerLayout->getOrientationName();
        $orientationClass = Helpers\Factory::make(__CLASS__, $orientationName);
        return $orientationClass->getHeight();
    }
    
    public function getMenuBackground(){
        return Helpers\Converter::Background(__CLASS__, 'background-menu');
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
