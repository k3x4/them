<?php

namespace Them\Footer\CSS\Layout;

use Them\Footer;
use Them\Helpers;
use Them\ICSS;

class RowsThree implements ICSS{
    
    public function getCSS() {
        $footer = new Footer\Main\Layout;
        $firstRow = new RowsOne;
        $secondRow = new RowsTwo;
        
        $widgetsPadding = $footer->getWidgetsPadding(FOOTER_ROW_3);
        $widgetsPadding = Helpers\Converter::spacingToCSS($widgetsPadding, 'padding');
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.footer.container .widget-area.row-3' => [
                'padding' => $widgetsPadding
            ]
        ];
        
        $firstRowPadding = $firstRow->getCSS();
        $secondRowPadding = $secondRow->getCSS();
        return array_merge($cssBlocks, $firstRowPadding, $secondRowPadding);
    }

    public function getCSSMedia() {
        return [];
    }
    
}
