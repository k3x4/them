<?php

namespace Them\Helpers\Bootstrap;

use Them\Sidebars\Main\Layout;

class BootstrapSecondSidebarPull extends BootstrapPush{
    
    public function left(){
        $sidebars = new Layout;
        if($sidebars->getSidebarPosition(SIDEBAR_SECOND) != __FUNCTION__){
            return 0;
        }        
        $width = $sidebars->getContentWidth();
        return intval($width);
    }
    
}
