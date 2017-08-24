<?php

namespace Them\Helpers\Bootstrap;

use Them\Sidebars\Main\Layout;

class BootstrapFirstSidebarPush extends BootstrapPush{
    
    public function left(){
        $sidebars = new Layout;
        if($sidebars->getSidebarPosition(SIDEBAR_FIRST) != __FUNCTION__){
            return 0;
        }
        $width = $sidebars->getSidebarWidth(SIDEBAR_FIRST);
        return intval($width);
    }
    
}
