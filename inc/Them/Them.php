<?php

namespace Them;

class Them {
    
    private $sections;
    private $hooks;
    
    public function setupMenu(){
        $this->sections = [];
        $this->addPreviews();
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
    
    private function addPreviews(){
        $this->addPatternPreviews();
    }
    
    private function addPatternPreviews() {
        $registry = Helpers\Registry::getInstance();
        $registry['patterns'] = [
            '01' => ['img' => THEME_URL . '/inc/preview/patterns/01.png'],
            '02' => ['img' => THEME_URL . '/inc/preview/patterns/02.png'],
            '03' => ['img' => THEME_URL . '/inc/preview/patterns/03.png'],
            '04' => ['img' => THEME_URL . '/inc/preview/patterns/04.png'],
            '05' => ['img' => THEME_URL . '/inc/preview/patterns/05.png'],
            '06' => ['img' => THEME_URL . '/inc/preview/patterns/06.png'],
            '07' => ['img' => THEME_URL . '/inc/preview/patterns/07.png'],
            '08' => ['img' => THEME_URL . '/inc/preview/patterns/08.png'],
            '09' => ['img' => THEME_URL . '/inc/preview/patterns/09.png'],
            '10' => ['img' => THEME_URL . '/inc/preview/patterns/10.png'],
            '11' => ['img' => THEME_URL . '/inc/preview/patterns/11.png'],
            '12' => ['img' => THEME_URL . '/inc/preview/patterns/12.png'],
            '13' => ['img' => THEME_URL . '/inc/preview/patterns/13.png'],
            '14' => ['img' => THEME_URL . '/inc/preview/patterns/14.png'],
            '15' => ['img' => THEME_URL . '/inc/preview/patterns/15.png'],
            '16' => ['img' => THEME_URL . '/inc/preview/patterns/16.png'],
            '17' => ['img' => THEME_URL . '/inc/preview/patterns/17.png'],
            '18' => ['img' => THEME_URL . '/inc/preview/patterns/18.png'],
            '19' => ['img' => THEME_URL . '/inc/preview/patterns/19.png'],
            '20' => ['img' => THEME_URL . '/inc/preview/patterns/20.png'],
            '21' => ['img' => THEME_URL . '/inc/preview/patterns/21.png'],
        ];
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
