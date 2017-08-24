<?php

namespace Them\Header\Main\Layout;

use Them\Header;
use Them\Helpers\Bootstrap;

class HorizontalOneLeft implements IHeaderLayout{
    
    public function getHeaderColumnsClasses(){
        $header = new Header\Main\Layout;
        $logoColumnSize = $header->getLogoColumnSize();
        $menuColumnSize = BOOTSTRAP_COLUMNS_SIZE - $logoColumnSize;
        
        $menuVerticalAlign = $header->getMenuVerticalAlign();
        $menuVerticalAlignClass = 'vertical-' . $menuVerticalAlign;
        
        $logoVerticalAlign = $header->getLogoVerticalAlign();
        $logoVerticalAlignClass = 'vertical-' . $logoVerticalAlign;        
        
        $bootstrap = new Bootstrap\Bootstrap;
        $first = $bootstrap->getColumnsClass($logoColumnSize) . ' ' . $logoVerticalAlignClass;
        $second = $bootstrap->getColumnsClass($menuColumnSize) . ' ' . $menuVerticalAlignClass;
        
        return [$first, $second];
    }

}
