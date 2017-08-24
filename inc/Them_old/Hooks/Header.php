<?php

namespace Them\Hooks;

use Them\Common\Header as CommonHeader;
use Them\Helpers;

class Header implements IHook {
    
    private $header;
    
    public function __construct() {
        $this->header = new CommonHeader\Layout;
    }
    
    public function addHooks(){
        $layoutName = $this->header->getLayoutName();
        $headerLayout = Helpers\Factory::make(__CLASS__, $layoutName);

        add_action('after_setup_theme', [$headerLayout, 'registerMenus']);
        add_filter('body_class', [$this, 'addBodyClass']);
    }
    
    public function addBodyClass($classes) {
        $classes[] = 'them-' . $this->header->getLayout();
        return $classes;
    }
    
}
