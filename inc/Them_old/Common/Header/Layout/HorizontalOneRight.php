<?php

namespace Them\Common\Header\Layout;

use Them\Common\Header;
use Them\Helpers\Bootstrap;

class HorizontalOneRight implements IHeaderLayout{
    
    public function getHeaderColumnsClasses(){
        $header = new Header\Layout;
        $logoColumnSize = $header->getLogoColumnSize();
        $menuColumnSize = BOOTSTRAP_COLUMNS_SIZE - $logoColumnSize;
        
        $bootstrap = new Bootstrap\Bootstrap;
        
        $menuVerticalAlign = $header->getMenuVerticalAlign();
        $menuVerticalAlignClass = 'vertical-' . $menuVerticalAlignClass;
        
        $logoVerticalAlign = $header->getLogoVerticalAlign();
        $logoVerticalAlignClass = 'vertical-' . $logoVerticalAlign;           
        
        $logoPush = $bootstrap->getPushClass($menuColumnSize);
        $menuPull = $bootstrap->getPullClass($logoColumnSize);
        
        $first = $bootstrap->getColumnsClass($logoColumnSize);
        $second = $bootstrap->getColumnsClass($menuColumnSize);
        
        $first .= ' ' . $logoPush . ' ' . $logoVerticalAlignClass;
        $second .= ' ' . $menuPull . ' ' . $menuVerticalAlignClass;
        
        return [$first, $second];
    }

}
