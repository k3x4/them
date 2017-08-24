<?php

namespace Them\Blog;

use Them\IHook;

class Hooks implements IHook {
    
    public function addHooks(){
        add_filter('excerpt_more', [$this, 'getMoreLink']);
        add_filter('excerpt_length', [$this, 'excerptLength']);
        add_filter( 'the_content_more_link', [$this, 'getMoreLink']);
    }
    
    public function excerptLength(){
        return 50; //
    }
    
    public function getMoreLink(){
        global $post;
        $text = 'View Full Post'; //
        $html  = '...';
        $html .= '<div class="view-full-post">';
        $html .= '<a href="'. get_permalink($post->ID) . '" class="view-full-post-btn">' . $text . '</a>';
        $html .= '</div>';
        return $html;
    }
    
}