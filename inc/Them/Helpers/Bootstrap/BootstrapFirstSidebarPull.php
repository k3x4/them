<?php

namespace Them\Helpers\Bootstrap;

use Them\Sidebars\Main\Layout;

class BootstrapFirstSidebarPull extends BootstrapPush{
    
    public function left(){
        $sidebars = new Layout;
        if($sidebars->getSidebarPosition(SIDEBAR_FIRST) != __FUNCTION__){
            return 0;
        }
        $width = $sidebars->getContentWidth();
        return intval($width);
    }
    
}
