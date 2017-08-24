<?php

namespace Them\Common\Header\Layout;

use Them\Common\Header;
use Them\Helpers\Bootstrap;

class HorizontalOneCenter implements IHeaderLayout{
    
    public function getHeaderColumnsClasses(){
        $header = new Header\Layout;
        $logoColumnSize = $header->getLogoColumnSize();
        $menuLeftColumnSize = $menuRightColumnSize = (BOOTSTRAP_COLUMNS_SIZE - $logoColumnSize) / 2;
        
        $bootstrap = new Bootstrap\Bootstrap;
        
        $logoPushLeft = $bootstrap->getPushClass($menuLeftColumnSize);
        $menuLeftPull = $bootstrap->getPullClass($logoColumnSize);
        
        $menuVerticalAlign = $header->getMenuVerticalAlign();
        $menuVerticalAlignClass = 'vertical-' . $menuVerticalAlign;
        
        $logoVerticalAlign = $header->getLogoVerticalAlign();
        $logoVerticalAlignClass = 'vertical-' . $logoVerticalAlign;           
        
        $first = $bootstrap->getColumnsClass($logoColumnSize) . ' ' . $logoVerticalAlignClass;
        $second = $bootstrap->getColumnsClass($menuLeftColumnSize) . ' ' . $menuVerticalAlignClass;
        $third = $bootstrap->getColumnsClass($menuRightColumnSize) . ' ' . $menuVerticalAlignClass;
        
        $first .= ' ' . $logoPushLeft;
        $second .= ' ' . $menuLeftPull;
        
        return [$first, $second, $third];
    }

}
