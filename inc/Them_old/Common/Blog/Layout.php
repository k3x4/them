<?php

namespace Them\Common\Blog;

use Them\Common\Options;

class Layout extends Options {
    
    public function getPostView() {
        return $this->options['post-view'];
    }
    
    public function getMoreLink(){
        return 'more';
    }
    
    public function theContent(){
        $show = $this->getPostView();
        $moreLink = $this->getMoreLink();
        
        switch($show){
            case 'content':
                the_content($moreLink);
                break;
            case 'excerpt':
                the_excerpt();
                break;
        }
        
        return;
    }

}
