<?php

namespace Them\Helpers\Media;

class SmallMediaCSS extends MediaCSS implements IMediaCSS {

    public function getQueries($tag, $containerSize) {
        $queries = [];
        $queries['992'][] = $this->containerWidthFixed($tag, $containerSize);
        $queries['1200'][] = $this->containerWidthFixed($tag, $containerSize);
        return $queries;
    }

}
