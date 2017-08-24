<?php

namespace Them\Header\Hooks;

class HorizontalOneCenter extends HeaderLayout {
    
    public function registerMenus(){
        $this->addMenu(THEM_LEFT_MENU_ID, THEM_LEFT_MENU_TITLE);
        $this->addMenu(THEM_RIGHT_MENU_ID, THEM_RIGHT_MENU_TITLE);
    }

}
