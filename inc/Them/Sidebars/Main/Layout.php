<?php

namespace Them\Sidebars\Main;

use Them\Options;
use Them\Helpers;

class Layout extends Options {

    public function getSidebarsCount() {
        $sidebars = explode('-', $this->options['scheme']);
        $count = $sidebars[SIDEBAR_COUNT];
        return intval($count);
    }

    public function getSidebarPosition($sidebar) {
        $sidebars = explode('-', $this->options['scheme']);
        return ($sidebars[$sidebar] == 'false') ? false : $sidebars[$sidebar];
    }

    public function getSidebarWidth($sidebar) {
        $count = $this->getSidebarsCount();
        $setting = 'count-' . $count . '-sidebar-' . $sidebar . '-width';
        $width = $this->options[$setting];
        return intval($width);
    }

    public function getContentWidth() {
        $count = $this->getSidebarsCount();
        if ($count) {
            $setting = 'count-' . $count . '-content-width';
            return intval($this->options[$setting]);
        }
        return BOOTSTRAP_COLUMNS_SIZE;
    }
    
    public function getSidebarClasses($sidebar){
        $bootstrap = new Helpers\Bootstrap\Bootstrap;
        $bootstrapSidebar = new Helpers\Bootstrap\BootstrapSidebar;
        
        switch($sidebar){
            case SIDEBAR_FIRST:
                $bootstrapSidebar = new Helpers\Bootstrap\BootstrapFirstSidebarPull($bootstrapSidebar);
                break;
            case SIDEBAR_SECOND:
                $bootstrapSidebar = new Helpers\Bootstrap\BootstrapSecondSidebarPull($bootstrapSidebar);
                break;
        }
        $pullWidth = $bootstrapSidebar->width();
        $width = $this->getSidebarWidth($sidebar);
                
        $sidebarID = [
            SIDEBAR_FIRST => 'first',
            SIDEBAR_SECOND => 'second'
        ];
        
        $classes = ['widget-area', 'sidebar_' . $sidebarID[$sidebar]];
        $classes[] = $bootstrap->getColumnsClass($width);
        $classes[] = $bootstrap->getPullClass($pullWidth);
        $classes = array_filter($classes);
        
        $filter = 'them_' . $sidebarID[$sidebar] . '_sidebar_classes';
        $classes = apply_filters($filter, $classes);
        return implode(' ', $classes); 
    }
    
    public function firstSidebarActive() {
        return ($this->getSidebarsCount() >= 1) ? true : false;
    }

    public function secondSidebarActive() {
        return ($this->getSidebarsCount() == 2) ? true : false;
    }

}
