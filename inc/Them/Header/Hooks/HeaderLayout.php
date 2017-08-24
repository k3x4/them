<?php

namespace Them\Header\Hooks;

use Them\Helpers\Menu;

abstract class HeaderLayout {
    
    protected function addMenu($menuID, $menuTitle){
        Menu::registerMenu($menuID, $menuTitle);
    }
    
    abstract public function registerMenus();
    
}
