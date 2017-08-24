<?php

namespace Them\Common\Footer;

use Them\Common\Options;
use Them\Helpers;

class Layout extends Options {
    
    protected $containerType;
    protected $containerSize;

    public function __construct() {
        parent::__construct();
        $this->containerType = $this->getContainerType();
        $this->containerSize = $this->getContainerSize();
    }
    
    public function getContainerType(){
        $options = Helpers\OverrideOptions::get(__CLASS__, THEM_CLASS_GENERAL, 'container-general');
        $setting = 'container-type';
        return $options[$setting];
    }
    
    public function getContainerSize(){
        $options = Helpers\OverrideOptions::get(__CLASS__, THEM_CLASS_GENERAL, 'container-general');
        $setting = 'container-' . $this->containerType . '-width';
        return intval($options[$setting]['width']);
    }
    
    public function getPadding(){
        return $this->options['padding'];
    }
    
    public function getPaddingWidgets(){
        return $this->options['padding-widgets'];
    }
    
    public function getContainerClass() {
        $classes = 'footer ';

        $options = Helpers\OverrideOptions::get(__CLASS__, THEM_CLASS_GENERAL, 'container-general');
        if ($options['container-type'] == CONTAINER_FIXED) {
            $classes .= 'container';
        } else {
            $classes .= 'container-fluid';
        }
        
        return $classes;
    }
    
    public function getRows(){
        return intval($this->options['rows']);
    }
    
    public function getRowsTemplate(){
        return 'rows-' . $this->getRows();
    }
    
    public function getRowWidgetsSize($row){
        $colWidth = $this->options['rows-' . $row . '-columns'];
        $colCount = BOOTSTRAP_COLUMNS_SIZE / intval($colWidth);
        
        return [ $colWidth, $colCount ];
    }
    
    public function getRowWidgets($row){
        list($colWidth, $colCount) = $this->getRowWidgetsSize($row);
        $bootstrap = new Helpers\Bootstrap\Bootstrap;
        
        $widgets = [];
        $class = 'widget-area';
        
        for ($i = 1; $i <= $colCount; $i++) {
            $widgetName = 'Footer row ' . $row . ' col ' . $i;
            $widgetID = THEME_DOMAIN . '_'. sanitize_title_with_dashes($widgetName);
            $widgetClass = $bootstrap->getColumnsClass($colWidth);
            $widget = [
                'ID' => $widgetID,
                'class' => $class . ' ' . $widgetClass
            ];
            $widgets[] = $widget;
        }
        
        return $widgets;
    }
    
}
