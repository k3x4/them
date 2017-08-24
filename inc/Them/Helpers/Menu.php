<?php

namespace Them\Helpers;

class Menu {
    
    public static function registerMenu($id, $title){
        register_nav_menus([
            $id => esc_html__($title, THEME_DOMAIN)
        ]);
    }
    
}
