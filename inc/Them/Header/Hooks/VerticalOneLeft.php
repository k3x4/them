<?php

namespace Them\Header\Hooks;

class VerticalOneLeft extends HeaderLayout {
    
    public function registerMenus(){
        $this->addMenu(THEM_PRIMARY_MENU_ID, THEM_PRIMARY_MENU_TITLE);
    }

}
