<?php

namespace Them\Content\Main;

use Them\Options;
use Them\Helpers;
use Them\Sidebars;

class Layout extends Options {

    public function getContainerType(){
        $options = Helpers\OverrideOptions::get(__CLASS__, THEM_CLASS_GENERAL, 'container-general');
        $setting = 'container-type';
        return $options[$setting];
    }

    public function getContainerSize(){
        $options = Helpers\OverrideOptions::get(__CLASS__, THEM_CLASS_GENERAL, 'container-general');
        $setting = 'container-' . $this->getContainerType() . '-width';
        return intval($options[$setting]['width']);
    }

    public function getContainerClass() {
        $classes = 'content ';

        $options = Helpers\OverrideOptions::get(__CLASS__, THEM_CLASS_GENERAL, 'container-general');
        if ($options['container-type'] == CONTAINER_FIXED) {
            $classes .= 'container';
        } else {
            $classes .= 'container-fluid';
        }
        
        return $classes;
    }

    public function getMainWrapperPadding() {
        return $this->options['main-wrapper-padding'];
    }

    public function getContentClasses() {
        $bootstrap = new Helpers\Bootstrap\Bootstrap;
        $bootstrapSidebar = new Helpers\Bootstrap\BootstrapSidebar;
        $bootstrapSidebar = new Helpers\Bootstrap\BootstrapFirstSidebarPush($bootstrapSidebar);
        $bootstrapSidebar = new Helpers\Bootstrap\BootstrapSecondSidebarPush($bootstrapSidebar);
        $pushWidth = $bootstrapSidebar->width();

        $sidebar = new Sidebars\Main\Layout;
        $contentWidth = $sidebar->getContentWidth();

        $classes = ['content-area-wrapper'];
        $classes[] = $bootstrap->getColumnsClass($contentWidth);
        $classes[] = $bootstrap->getPushClass($pushWidth);
        $classes = array_filter($classes);

        $classes = apply_filters('them_content_classes', $classes);
        return implode(' ', $classes);
    }

}
