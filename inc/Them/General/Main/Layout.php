<?php

namespace Them\General\Main;

use Them\Options;
use Them\Helpers;
use Them\Sidebars;

class Layout extends Options {
    
    public function getContainerType(){
        $setting = 'container-type';
        return $this->options[$setting];
    }
    
    public function getContainerSize(){
        $setting = 'container-' . $this->getContainerType() . '-width';
        return intval($this->options[$setting]['width']);
    }
    
    public function getContainerClass(){  
        $classes = 'content ';
        if ($this->options['container-type'] == CONTAINER_FIXED) {
            $classes .= 'container';
        } else {
            $classes .= 'container-fluid';
        }
        return $classes;
    }
    
    public function getGeneralPadding(){
        return $this->options['general-padding'];
    }
    
    public function getContentPadding(){
        return $this->options['content-padding'];
    }
    
    public function getContentClasses(){
        $bootstrap = new Helpers\Bootstrap\Bootstrap;
        $bootstrapSidebar = new Helpers\Bootstrap\BootstrapSidebar;
        $bootstrapSidebar = new Helpers\Bootstrap\BootstrapFirstSidebarPush($bootstrapSidebar);
        $bootstrapSidebar = new Helpers\Bootstrap\BootstrapSecondSidebarPush($bootstrapSidebar);
        $pushWidth = $bootstrapSidebar->width();
        
        $sidebar = new Sidebars\Main\Layout;
        $contentWidth = $sidebar->getContentWidth();
        
        $classes = ['content-area'];
        $classes[] = $bootstrap->getColumnsClass($contentWidth);
        $classes[] = $bootstrap->getPushClass($pushWidth);
        $classes = array_filter($classes);
        
        $classes = apply_filters('them_content_classes', $classes);
        return implode(' ', $classes); 
   }
    
}
