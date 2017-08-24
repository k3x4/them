<?php

namespace Them\Hooks\Header;

use Them\Helpers\Menu;

abstract class HeaderLayout {
    
    protected function addMenu($menuID, $menuTitle){
        Menu::registerMenu($menuID, $menuTitle);
    }
    
    abstract public function registerMenus();
    
}
