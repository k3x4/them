<?php

namespace Them\CSS\Header\Layout\Horizontal;

use Them\CSS\ICSS;

class HorizontalOneLeft implements ICSS {
    
    public function getCSS() {
        $cssBlocks = [];
        $cssBlocks[] = [
            'them-' . ORIENTATION_HORIZONTAL_TYPE1_LEFT . ' .main-navigation' => [
                'float' => 'right'
            ]
        ];
        return $cssBlocks;
    }

    public function getCSSMedia() {
        return [];
    }

}
