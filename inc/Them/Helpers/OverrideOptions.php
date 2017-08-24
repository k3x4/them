<?php

namespace Them\Helpers;

class OverrideOptions {
    
    public static function get($currentClass, $overrideClass, $overrideFlag){
        $curOptions = Registry::getOptions($currentClass);
        if( ! $curOptions[$overrideFlag] ){
            return $curOptions;
        }
        
        $settingsParts = explode('\\', $currentClass);
        $subSection = end($settingsParts);
        
        $overrideSettings = $overrideClass . '\\' . $subSection;
        $overrideOptions = Registry::getOptions($overrideSettings);
        return $overrideOptions;
    }
    
}
