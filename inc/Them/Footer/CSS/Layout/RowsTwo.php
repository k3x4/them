<?php

namespace Them\Footer\CSS\Layout;

use Them\Footer;
use Them\Helpers;
use Them\ICSS;

class RowsOne implements ICSS{
    
    public function getCSS() {
        $footer = new Footer\Main\Layout;
        $widgetsPadding = $footer->getWidgetsPadding(FOOTER_ROW_2);
        $widgetsPadding = Helpers\Converter::spacingToCSS($widgetsPadding, 'padding');
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.footer.container.rows-2 .widget-area' => [
                'padding' => $widgetsPadding
            ]
        ];
        return $cssBlocks;
    }

    public function getCSSMedia() {
        return [];
    }
    
}
