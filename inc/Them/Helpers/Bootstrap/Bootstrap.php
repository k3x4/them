<?php

namespace Them\Helpers\Bootstrap;

class Bootstrap {
    
    public function getColumnsClass($columnsSize){
        $columnsSize = intval($columnsSize);
        if($columnsSize){
            return 'col-md-' . $columnsSize;
        }
        return '';
    }
    
    public function getPushClass($pushSize){
        $pushSize = intval($pushSize);
        if($pushSize){
            return 'col-md-push-' . $pushSize;
        }
        return '';
    }
    
    public function getPullClass($pullSize){
        $pullSize = intval($pullSize);
        if($pullSize){
            return 'col-md-pull-' . $pullSize;
        }
        return '';
    }
    
}
