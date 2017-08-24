<?php

namespace Them\Helpers\Media;

class MediaCSS {
    
    protected function containerWidthFixed($tag, $container_size) {
        $container = [
            $tag => [
                'width' => $container_size . 'px'
            ]
        ];
        return $container;
    }
    
}
