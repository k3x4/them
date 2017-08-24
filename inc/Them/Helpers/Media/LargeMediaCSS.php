<?php

namespace Them\Helpers\Media;

class LargeMediaCSS extends MediaCSS implements IMediaCSS {

    public function getQueries($tag, $containerSize) {
        $queries = [];
        
        $res = $containerSize - 1170;
        $multiply = intval(($res / 200) + 1);
        
        for ($i = 1; $i <= $multiply; $i++) {
            $breakpoint = strval(1200 + ($i * 200));
            
            if($i == $multiply){
                $width = $containerSize;
            } else {
                $width = strval(1170 + ($i * 200));                
            }
            
            $queries[$breakpoint][] = $this->containerWidthFixed($tag, $width);
        }
        
        return $queries;
    }

}
