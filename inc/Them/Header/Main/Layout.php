<?php

namespace Them\Header\Main;

use Them\Options;
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
    
    public function getLayout() {
        $type = 'orientation-' . $this->options['orientation'];
        $lineCount = $this->options[$type];
        $layout = $type . $lineCount;
        return $this->options[$layout];
    }
    
    public function getWrapperPadding(){
        return $this->options['wrapper-padding'];
    }
    
    public function getMainPadding(){
        return $this->options['main-padding'];
    }
    
    public function getWidth(){
        $orientationName = $this->getOrientationName();
        $orientationClass = Helpers\Factory::make(__CLASS__, $orientationName);
        return $orientationClass->getWidth();
    }
    
    public function getWidthUnits(){
        $orientationName = $this->getOrientationName();
        $orientationClass = Helpers\Factory::make(__CLASS__, $orientationName);
        return $orientationClass->getWidthUnits();
    }
    
    public function getHeight(){
        $orientationName = $this->getOrientationName();
        $orientationClass = Helpers\Factory::make(__CLASS__, $orientationName);
        return $orientationClass->getHeight();
    }
    
    public function getHeightUnits(){
        $orientationName = $this->getOrientationName();
        $orientationClass = Helpers\Factory::make(__CLASS__, $orientationName);
        return $orientationClass->getHeightUnits();
    }
    
    public function getHeaderColumnsClasses(){
        $layoutName = $this->getLayoutName();
        $layoutClass = Helpers\Factory::make(__CLASS__, $layoutName);
        return $layoutClass->getHeaderColumnsClasses();
    }
    
    public function getMenusCount(){
        $layout = $this->getLayout();
        if($layout == ORIENTATION_HORIZONTAL_TYPE1_CENTER){
            return 2;
        }
        return 1;
    }
    
    public function getLogoColumnSize(){
        $menusCount = $this->getMenusCount();
        $setting = 'logo-' . $menusCount . '-column-size';
        return intval($this->options[$setting]);
    }
    
    public function getLogoVerticalAlign(){
        return $this->options['logo-vertical-align'];
    }
    
    public function getMenuVerticalAlign(){
        return $this->options['menu-vertical-align'];
    }
    
    public function customHeightEnable(){
        return $this->options['custom-height'];
    }
    
    public function getLayoutName() {
        $layout = $this->getLayout();
        if(!$layout){
            return;
        }
        $layoutKeys = [
            ORIENTATION_HORIZONTAL_TYPE1_LEFT       => 'HorizontalOneLeft',
            ORIENTATION_HORIZONTAL_TYPE1_CENTER     => 'HorizontalOneCenter',
            ORIENTATION_HORIZONTAL_TYPE1_RIGHT      => 'HorizontalOneRight',
            ORIENTATION_HORIZONTAL_TYPE2_LEFT       => 'HorizontalTwoLeft',
            ORIENTATION_HORIZONTAL_TYPE2_CENTER     => 'HorizontalTwoCenter',
            ORIENTATION_HORIZONTAL_TYPE2_RIGHT      => 'HorizontalTwoRight',
            ORIENTATION_VERTICAL_TYPE1_LEFT         => 'VerticalOneLeft',
            ORIENTATION_VERTICAL_TYPE1_RIGHT        => 'VerticalOneRight',
            ORIENTATION_VERTICAL_TYPE2_LEFT         => 'VerticalTwoLeft',
            ORIENTATION_VERTICAL_TYPE2_RIGHT        => 'VerticalTwoRight',
        ];
        return $layoutKeys[$layout];
    }

    public function getContainerClass() {
        $classes = '';

        $options = Helpers\OverrideOptions::get(__CLASS__, THEM_CLASS_GENERAL, 'container-general');
        if ($options['container-type'] == CONTAINER_FIXED) {
            $classes .= 'container';
        } else {
            $classes .= 'container-fluid';
        }
        
        return $classes;
    }
    
    public function getOrientation(){
        return $this->options['orientation'];
    }
    
    public function getOrientationName(){
        $orientation = $this->getOrientation();
        $orientationKeys = [
            ORIENTATION_HORIZONTAL => 'Horizontal',
            ORIENTATION_VERTICAL => 'Vertical'
        ];
        return $orientationKeys[$orientation];
    }

}
