<?php

namespace Them;

use Them\Helpers\Factory;
use Them\Sections;
use Them\Hooks;
use Them\CSS;

class Them {
    
    private $sections;
    private $hooks;
    
    public function setupMenu(){
        $this->sections = [];
        $this->addSections();
        $this->makeSections();
    }
    
    public function setupHooks(){
        $this->hooks = [];
        $this->addHooks();
        $this->makeHooks();
    }
    
    private function addSections(){
        $this->addSection(new Sections\General);
        $this->addSection(new Sections\General\Layout);
        
        $this->addSection(new Sections\LogoFavicon);
        $this->addSection(new Sections\LogoFavicon\Logo);
        $this->addSection(new Sections\LogoFavicon\Favicon);
        
        $this->addSection(new Sections\Styling);
        $this->addSection(new Sections\Styling\General);
        $this->addSection(new Sections\Styling\Header);
        $this->addSection(new Sections\Styling\Content);
        $this->addSection(new Sections\Styling\Footer);
        
        $this->addSection(new Sections\Typography);
        $this->addSection(new Sections\Typography\Body);
        $this->addSection(new Sections\Typography\Menu);
        $this->addSection(new Sections\Typography\Headers);
        
        $this->addSection(new Sections\Blog);
        $this->addSection(new Sections\Blog\Layout);
        
        $this->addSection(new Sections\Header);
        $this->addSection(new Sections\Header\Layout);
        $this->addSection(new Sections\Header\Menu);
        $this->addSection(new Sections\Header\Sticky);

        $this->addSection(new Sections\Footer);
        $this->addSection(new Sections\Footer\Layout);

        $this->addSection(new Sections\Sidebars);
        $this->addSection(new Sections\Sidebars\Layout);    
    }
    
    private function addSection(Sections\ISection $section){
        $this->sections[] = $section;
    }
    
    private function makeSections(){
        foreach($this->sections as $section){
            $section->addSection();
        }
    }
    
    private function addHooks(){
        $this->addHook(new Hooks\General);
        $this->addHook(new Hooks\LogoFavicon);
        $this->addHook(new Hooks\Styling);
        $this->addHook(new Hooks\Typography);
        $this->addHook(new Hooks\Blog);
        $this->addHook(new Hooks\Header);
        $this->addHook(new Hooks\Footer);
        $this->addHook(new Hooks\Sidebars);
        
        $this->addHook(new Hooks\CSSBuilder);
    }
    
    private function addHook(Hooks\IHook $hook){
        $this->hooks[] = $hook;
    }
    
    private function makeHooks(){
        foreach($this->hooks as $hook){
            $hook->addHooks();
        }
    }
    
}
