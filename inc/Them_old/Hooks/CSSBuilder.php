<?php

namespace Them\Hooks;

use Them\Common\CSSBuilder as CommonCSSBuilder;
use Them\Helpers;
use Them\CSS;

class CSSBuilder implements IHook {
    
    public function addHooks() {
        add_action('redux/options/' . THEME_DOMAIN . '/saved', [$this, 'saveStylesheetFile']);
        add_action('redux/options/' . THEME_DOMAIN . '/reset', [$this, 'saveStylesheetFile']);
    }
    
    public function saveStylesheetFile() {
        $cssBuilder = new CommonCSSBuilder;
        $cssBuilder->addCSSFile(THEME_DIR . '/css/base.css');
        
        Helpers\Registry::getInstance()->buildOptions();

        $cssBuilder->addCSSObject(new CSS\General);
        $cssBuilder->addCSSObject(new CSS\LogoFavicon);
        $cssBuilder->addCSSObject(new CSS\Styling);
        $cssBuilder->addCSSObject(new CSS\Typography);
        $cssBuilder->addCSSObject(new CSS\Header);
        $cssBuilder->addCSSObject(new CSS\Footer);
        $cssBuilder->addCSSObject(new CSS\Sidebars);

        $cssBuilder->buildCSS();
        $cssBuilder->minifyCSS(THEME_DIR . '/css/theme.css');
    }
    
}
