<?php

namespace Them\Helpers;

class Factory {

    public static function nameToNamespace($className){
        $parts = explode('_', $className);
        $parts = array_map('ucfirst', $parts);

        $class = implode('\\', $parts);
        return $class;
    }
    
    public static function make($baseNamespace, $class){
        $class = self::nameToNamespace($class);
        $className = $baseNamespace . '\\' . $class;
        if (class_exists($className)) {
            return new $className;
        }
        return null;
    }
    
    public static function common($className) {
        $baseNamespace = 'Them\\Common';    
        return self::make($baseNamespace, $className);
    }
    
    public static function helper($className) {
        $baseNamespace = 'Them\\Helpers'; 
        return self::make($baseNamespace, $className);
    }

}
