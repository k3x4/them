<?php

namespace Them\Header;

use Them\Helpers;
use Them\IHook;

class Hooks implements IHook {
    
    private $header;
    
    public function __construct() {
        $this->header = new Main\Layout;
    }
    
    public function addHooks(){
        $layoutName = $this->header->getLayoutName();
        $headerLayout = Helpers\Factory::make(__CLASS__, $layoutName);

        add_action('after_setup_theme', [$headerLayout, 'registerMenus']);
        add_filter('body_class', [$this, 'addBodyClass']);
        add_action('wp_enqueue_scripts', [$this, 'addJSVars']);
    }
    
    public function addBodyClass($classes) {
        $classes[] = 'them-' . $this->header->getLayout();
        return $classes;
    }
    
    public function addJSVars(){
        $sticky = new Main\Sticky;
        wp_localize_script( 'them-frontend', 'headerVars', $sticky->getJSVars() );
    }
    
}

