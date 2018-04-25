<?php

namespace Them;

use tubalmartin\CssMin\Minifier;

class CSSBuilder {
    
    private $CSS;
    private $CSSMedia;
    private $CSSMediaRetina;
    private $CSSObjects;
    
    public function __construct() {
        $this->CSSObjects = [];
        $this->CSSMedia = [];
        $this->CSSMediaRetina = [];
        $this->CSS = '';
    }
    
    public function tableToCSS($cssTable) {
        $CSS = '';
        foreach ($cssTable as $tag => $block) {
            if ($block && is_array($block)) {
                $CSS .= $tag . '{';
                foreach ($block as $property => $value) {
                    $CSS .= $property . ':' . $value . ';';
                }
                $CSS .= '}' . PHP_EOL;
            }
        }

        return $CSS;
    }
    
    public function addCSSFile($filename){
        if(file_exists($filename)){
            $this->CSS .= file_get_contents($filename);
        }
    }
    
    public function addCSSObject(ICSS $cssObject) {
        $this->CSSObjects[] = $cssObject;
    }
    
    private function makeCSSMedia() {
        foreach($this->CSSMedia as $media => $blocks){
            $this->CSS .= '@media (min-width: ' . $media . 'px) {' . PHP_EOL;
            foreach($blocks as $block){
                $this->CSS .= $this->tableToCSS($block);
            }
            $this->CSS .= '}' . PHP_EOL;
        }
    }
    
    private function makeCSSMediaRetina() {
        if(!$this->CSSMediaRetina){
            return;
        }
        
        $this->CSS .= '@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {' . PHP_EOL;
        foreach($this->CSSMediaRetina as $block){
            $this->CSS .= $this->tableToCSS($block);
        }
        $this->CSS .= '}' . PHP_EOL;
    }
    
    private function mergeCSSArray($finalArray, $CSSArray) {
        foreach ($CSSArray as $key => $value) {
            if (!isset($finalArray[$key])) {
                $finalArray[$key] = [];
            }
            $finalArray[$key] = array_merge($finalArray[$key], $value);
        }
        return $finalArray;
    }

    public function buildCSS() {
        if (!$this->CSSObjects) {
            return;
        }

        $finalArray = [];
        foreach ($this->CSSObjects as $instance) {
            
            $CSS = $instance->getCSS();
            $CSSMedia = $instance->getCSSMedia();
            $CSSMediaRetina = $instance->getCSSMediaRetina();
            
            foreach ($CSS as $block) {
                $finalArray = $this->mergeCSSArray($finalArray, $block);    
            }
            
            foreach ($CSSMedia as $media => $blocks) {
                foreach ($blocks as $block) {
                    $this->CSSMedia[$media][] = $block;
                }
            }
            foreach ($CSSMediaRetina as $blocks) {
                $this->CSSMediaRetina[] = $blocks;
            }
            
        }
        $this->CSS .= $this->tableToCSS($finalArray);
        $this->makeCSSMediaRetina();
        $this->makeCSSMedia();
    }

    public function minifyCSS($path) {
        $compressor = new Minifier;

        $compressor->keepSourceMapComment(false);
        $compressor->setLineBreakPosition(0);
        //$output_css = $compressor->run($this->CSS);
        $output_css = $this->CSS;

        file_put_contents($path, $output_css);
    }
    
}
