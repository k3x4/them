<?php

namespace Them\Helpers;

class Factory {

    public static function nameToNamespace($className){
        $parts = explode('_', $className);
        $parts = array_map('ucfirst', $parts);

        $class = implode('\\', $parts);
        return $class;
    }
    
    public static function mainToNamespace($className){
        $parts = explode('_', $className);
        $parts = array_map('ucfirst', $parts);
        $beforeLast = count($parts) - 1;
        array_splice($parts, $beforeLast, 0, 'Main');

        $class = implode('\\', $parts);
        return $class;
    }
    
    public static function make($baseNamespace, $class, $main = false){
        if($main){
            $class = self::mainToNamespace($class);
        } else {
            $class = self::nameToNamespace($class);
        }
        $className = $baseNamespace . '\\' . $class;
        if (class_exists($className)) {
            return new $className;
        }
        return null;
    }
    
    public static function main($className) {
        $baseNamespace = 'Them';    
        return self::make($baseNamespace, $className, true);
    }
    
    public static function helper($className) {
        $baseNamespace = 'Them\\Helpers'; 
        return self::make($baseNamespace, $className);
    }

}
