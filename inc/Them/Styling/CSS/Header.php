<?php

namespace Them\Styling\CSS;

use Them\Styling;
use Them\ICSS;

class Header implements ICSS {
     
    public function getCSS() {
        $header = new Styling\Main\Header;
        
        $headerBackgroundColor = $header->getHeaderBackgroundColor();
        $menuBackgroundColor = $header->getMenuBackgroundColor();
        
        $menuItemsColor = $header->getMenuItemsTextColor();
        $menuItemsBackgroundColor = $header->getMenuItemsBackgroundColor();
        $menuItemsHoverColor = $header->getMenuItemsTextHoverColor();
        $menuItemsHoverBackgroundColor = $header->getMenuItemsBackgroundHoverColor();
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.header.container, .header.container-fluid' => [
                'background-color' => $headerBackgroundColor['color']
            ],
            '.main-navigation .nav-menu, .main-navigation .nav-menu .sub-menu' => [
                'background-color' => $menuBackgroundColor['color']
            ],
            '.main-navigation .nav-menu li a, .main-navigation .nav-menu li a:visited' => [
                'color' => $menuItemsColor,
                'background-color' => $menuItemsBackgroundColor
            ]
        ];
        
        if($header->menuItemsHoverTextChange()):
        $cssBlocks[] = [
            '.main-navigation .nav-menu li a:hover, .main-navigation .nav-menu li a:focus' => [
                'color' => $menuItemsHoverColor
            ]
        ];
        endif;
        
        if($header->menuItemsHoverBackgroundChange()):
        $cssBlocks[] = [
            '.main-navigation .nav-menu li a:hover, .main-navigation .nav-menu li a:focus' => [
                'background-color' => $menuItemsHoverBackgroundColor
            ]
        ];
        endif;
        
        if(isset($headerBackgroundColor['rgba'])):
        $cssBlocks[] = [
            '.header.container, .header.container-fluid' => [
                'background-color' => $headerBackgroundColor['rgba']
            ]
        ];
        endif;
        
        if(isset($menuBackgroundColor['rgba'])):
        $cssBlocks[] = [
            '.main-navigation .nav-menu' => [
                'background-color' => $menuBackgroundColor['rgba']
            ]
        ];
        endif;
        
        return $cssBlocks;
    }

    public function getCSSMedia() {
        return [];
    }
    
}
