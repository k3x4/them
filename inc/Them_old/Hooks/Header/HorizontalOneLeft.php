<?php

namespace Them\Hooks\Header;

class HorizontalOneLeft extends HeaderLayout {
    
    public function registerMenus(){
        $this->addMenu(THEM_PRIMARY_MENU_ID, THEM_PRIMARY_MENU_TITLE);
    }

}
