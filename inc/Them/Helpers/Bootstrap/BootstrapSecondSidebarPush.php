<?php

namespace Them\Helpers\Bootstrap;

use Them\Sidebars\Main\Layout;

class BootstrapSecondSidebarPush extends BootstrapPush{
    
    public function left(){
        $sidebars = new Layout;
        if($sidebars->getSidebarPosition(SIDEBAR_SECOND) != __FUNCTION__){
            return 0;
        }        
        $width = $sidebars->getSidebarWidth(SIDEBAR_SECOND);
        return intval($width);
    }
    
}
