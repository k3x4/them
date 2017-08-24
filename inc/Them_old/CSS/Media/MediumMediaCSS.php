<?php

namespace Them\CSS\Media;

class MediumMediaCSS extends MediaCSS implements IMediaCSS {

    public function getQueries($tag, $containerSize) {
        $queries = [];
        $queries['1200'][] = $this->containerWidthFixed($tag, $containerSize);
        return $queries;
    }

}
