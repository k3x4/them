<?php

namespace Them\Footer\CSS\Layout;

use Them\Footer;
use Them\Helpers;
use Them\ICSS;

class RowsTwo implements ICSS{
    
    public function getCSS() {
        $footer = new Footer\Main\Layout;
        $firstRow = new RowsOne;
        
        $widgetsPadding = $footer->getWidgetsPadding(FOOTER_ROW_2);
        $widgetsPadding = Helpers\Converter::spacingToCSS($widgetsPadding, 'padding');
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.footer.container .widget-area.row-2' => [
                'padding' => $widgetsPadding
            ]
        ];
        
        $firstRowPadding = $firstRow->getCSS();
        return array_merge($cssBlocks, $firstRowPadding);
    }

    public function getCSSMedia() {
        return [];
    }
    
    public function getCSSMediaRetina() {
        return [];
    }
    
}
