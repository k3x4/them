<?php

namespace Them\Header\CSS;

use Them\Header;
use Them\Helpers;
use Them\ICSS;

class Menu implements ICSS {
    
    private $type;
    
    public function __construct() {
        $header = new Header\Main\Layout;
        $orientation = $header->getOrientationName();
        $this->type = Helpers\Factory::make(__CLASS__, $orientation);
    }
    
    private function generalCSS(){
        $menu = new Header\Main\Menu;
        $paddingUL = $menu->getPadding();
        $paddingItems = $menu->getPaddingItems();
        
        $paddingUL = Helpers\Converter::spacingToCSS($paddingUL, 'padding');
        $paddingItems = Helpers\Converter::spacingToCSS($paddingItems, 'padding');
        
        $menuBackground = $menu->getMenuBackground();
        
        $menuItemsColor = $menu->getMenuItemsTextColor();
        $menuItemsHoverColor = $menu->getMenuItemsTextHoverColor();
        $menuItemsBackgroundColor = $menu->getMenuItemsBackgroundColor();
        $menuItemsHoverBackgroundColor = $menu->getMenuItemsBackgroundHoverColor();
        
        $menuSubitemsColor = $menu->getMenuSubitemsTextColor();
        $menuSubitemsHoverColor = $menu->getMenuSubitemsTextHoverColor();
        $menuSubitemsBackgroundColor = $menu->getMenuSubitemsBackgroundColor();
        $menuSubitemsHoverBackgroundColor = $menu->getMenuSubitemsBackgroundHoverColor();
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.main-navigation .nav-menu' => [
                'padding' => $paddingUL,
                'display' => 'block',
                'background' => $menuBackground
            ],
            '.main-navigation .nav-menu li a' => [
                'padding' => $paddingItems,
                'display' => 'block'
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
        
        if($menu->menuItemsHoverTextChange()):
        $cssBlocks[] = [
            '.main-navigation .nav-menu li a:hover, ' .
            '.main-navigation .nav-menu li a:focus' => [
                'color' => $menuItemsHoverColor
            ]
        ];
        endif;
        
        if($menu->menuItemsHoverBackgroundChange()):
        $cssBlocks[] = [
            '.main-navigation .nav-menu li a:hover, ' .
            '.main-navigation .nav-menu li a:focus' => [
                'background-color' => $menuItemsHoverBackgroundColor
            ]
        ];
        endif;
        
        if($menu->menuSubitemsHoverTextChange()):
        $cssBlocks[] = [
            '.main-navigation .nav-menu .sub-menu li a:hover, ' .
            '.main-navigation .nav-menu .sub-menu li a:focus' => [
                'color' => $menuSubitemsHoverColor
            ]
        ];
        endif;
        
        if($menu->menuSubitemsHoverBackgroundChange()):
        $cssBlocks[] = [
            '.main-navigation .nav-menu .sub-menu li a:hover, ' .
            '.main-navigation .nav-menu .sub-menu li a:focus' => [
                'background-color' => $menuSubitemsHoverBackgroundColor
            ]
        ];
        endif;

        return $cssBlocks;
    }
    
    private function generalCSSMedia(){
        return [];
    }
    
    public function getCSS() {
        return array_merge($this->generalCSS(), $this->type->getCSS());
    }

    public function getCSSMedia() {
        $CSS = new Helpers\CSS;
        $generalCSSMedia = $this->generalCSSMedia();
        $typeCSSMedia = $this->type->getCSSMedia();
        return $CSS->mediaMerge($generalCSSMedia, $typeCSSMedia);
    }
    
}
