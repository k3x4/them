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
        $menuItemsHoverColor = $header->getMenuItemsTextHoverColor();
        $menuItemsBackgroundColor = $header->getMenuItemsBackgroundColor();
        $menuItemsHoverBackgroundColor = $header->getMenuItemsBackgroundHoverColor();
        
        $menuSubitemsColor = $header->getMenuSubitemsTextColor();
        $menuSubitemsHoverColor = $header->getMenuSubitemsTextHoverColor();
        $menuSubitemsBackgroundColor = $header->getMenuSubitemsBackgroundColor();
        $menuSubitemsHoverBackgroundColor = $header->getMenuSubitemsBackgroundHoverColor();
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.site-header' => [
                'background-color' => $headerBackgroundColor
            ],
            '.main-navigation .nav-menu' => [
                'background-color' => $menuBackgroundColor
            ],
            '.main-navigation .nav-menu li a, ' .
            '.main-navigation .nav-menu li a:visited' => [
                'color' => $menuItemsColor,
                'background-color' => $menuItemsBackgroundColor
            ],
            '.main-navigation .nav-menu .sub-menu li a, ' .
            '.main-navigation .nav-menu .sub-menu li a:visited' => [
                'color' => $menuSubitemsColor,
                'background-color' => $menuSubitemsBackgroundColor
            ],
        ];
        
        if($header->menuItemsHoverTextChange()):
        $cssBlocks[] = [
            '.main-navigation .nav-menu li a:hover, ' .
            '.main-navigation .nav-menu li a:focus' => [
                'color' => $menuItemsHoverColor
            ]
        ];
        endif;
        
        if($header->menuItemsHoverBackgroundChange()):
        $cssBlocks[] = [
            '.main-navigation .nav-menu li a:hover, ' .
            '.main-navigation .nav-menu li a:focus' => [
                'background-color' => $menuItemsHoverBackgroundColor
            ]
        ];
        endif;
        
        if($header->menuSubitemsHoverTextChange()):
        $cssBlocks[] = [
            '.main-navigation .nav-menu .sub-menu li a:hover, ' .
            '.main-navigation .nav-menu .sub-menu li a:focus' => [
                'color' => $menuSubitemsHoverColor
            ]
        ];
        endif;
        
        if($header->menuSubitemsHoverBackgroundChange()):
        $cssBlocks[] = [
            '.main-navigation .nav-menu .sub-menu li a:hover, ' .
            '.main-navigation .nav-menu .sub-menu li a:focus' => [
                'background-color' => $menuSubitemsHoverBackgroundColor
            ]
        ];
        endif;
        
        return $cssBlocks;
    }

    public function getCSSMedia() {
        return [];
    }
    
}
