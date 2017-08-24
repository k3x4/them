<?php

namespace Them;

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
        
        add_action('redux/options/' . THEME_DOMAIN . '/saved', [$this, 'saveStylesheetFile']);
        add_action('redux/options/' . THEME_DOMAIN . '/reset', [$this, 'saveStylesheetFile']);
    }
    
    private function addSections(){
        $this->addSection(new General\Sections);
        $this->addSection(new General\Sections\Layout);
        
        $this->addSection(new LogoFavicon\Sections);
        $this->addSection(new LogoFavicon\Sections\Logo);
        $this->addSection(new LogoFavicon\Sections\Favicon);
        
        $this->addSection(new Styling\Sections);
        $this->addSection(new Styling\Sections\General);
        $this->addSection(new Styling\Sections\Header);
        $this->addSection(new Styling\Sections\Content);
        $this->addSection(new Styling\Sections\Footer);
        
        $this->addSection(new Typography\Sections);
        $this->addSection(new Typography\Sections\Body);
        $this->addSection(new Typography\Sections\Menu);
        $this->addSection(new Typography\Sections\Headers);
        
        $this->addSection(new Blog\Sections);
        $this->addSection(new Blog\Sections\Layout);
        
        $this->addSection(new Header\Sections);
        $this->addSection(new Header\Sections\Layout);
        $this->addSection(new Header\Sections\Menu);
        $this->addSection(new Header\Sections\Sticky);

        $this->addSection(new Footer\Sections);
        $this->addSection(new Footer\Sections\Layout);

        $this->addSection(new Sidebars\Sections);
        $this->addSection(new Sidebars\Sections\Layout);    
    }
    
    private function addSection(ISection $section){
        $this->sections[] = $section;
    }
    
    private function makeSections(){
        foreach($this->sections as $section){
            $section->addSection();
        }
    }
    
    private function addHooks(){
        $this->addHook(new General\Hooks);
        $this->addHook(new LogoFavicon\Hooks);
        $this->addHook(new Styling\Hooks);
        $this->addHook(new Typography\Hooks);
        $this->addHook(new Blog\Hooks);
        $this->addHook(new Header\Hooks);
        $this->addHook(new Footer\Hooks);
        $this->addHook(new Sidebars\Hooks);
    }
    
    private function addHook(IHook $hook){
        $this->hooks[] = $hook;
    }
    
    private function makeHooks(){
        foreach($this->hooks as $hook){
            $hook->addHooks();
        }
    }
    
    public function saveStylesheetFile() {
        $cssBuilder = new CSSBuilder;
        $cssBuilder->addCSSFile(THEME_DIR . '/css/base.css');
        
        Helpers\Registry::getInstance()->buildOptions();

        $cssBuilder->addCSSObject(new General\CSS);
        $cssBuilder->addCSSObject(new LogoFavicon\CSS);
        $cssBuilder->addCSSObject(new Styling\CSS);
        $cssBuilder->addCSSObject(new Typography\CSS);
        $cssBuilder->addCSSObject(new Header\CSS);
        $cssBuilder->addCSSObject(new Footer\CSS);
        $cssBuilder->addCSSObject(new Sidebars\CSS);

        $cssBuilder->buildCSS();
        $cssBuilder->minifyCSS(THEME_DIR . '/css/theme.css');
    }
    
}
