<?php

namespace Them\Common;

use Them\CSS;

use tubalmartin\CssMin\Minifier;

class CSSBuilder {
    
    private $CSS;
    private $CSSMedia;
    private $CSSObjects;
    
    public function __construct() {
        $this->CSSObjects = [];
        $this->CSSMedia = [];
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
                $CSS .= '}' . "\n";
            }
        }

        return $CSS;
    }
    
    public function addCSSFile($filename){
        if(file_exists($filename)){
            $this->CSS .= file_get_contents($filename);
        }
    }
    
    public function addCSSObject(CSS\ICSS $cssObject) {
        $this->CSSObjects[] = $cssObject;
    }
    
    private function makeCSSMedia() {
        foreach($this->CSSMedia as $media => $blocks){
            $this->CSS .= '@media (min-width: ' . $media . 'px) {' . "\n";
            foreach($blocks as $block){
                $this->CSS .= $this->tableToCSS($block);
            }
            $this->CSS .= '}' . "\n";
        }
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
            
            foreach ($CSS as $block) {
                $finalArray = $this->mergeCSSArray($finalArray, $block);    
            }
            
            foreach ($CSSMedia as $media => $blocks) {
                foreach ($blocks as $block) {
                    $this->CSSMedia[$media][] = $block;
                }
            }
            
        }
        $this->CSS .= $this->tableToCSS($finalArray);
        $this->makeCSSMedia();
    }

    public function minifyCSS($path) {
        $compressor = new Minifier;

        $compressor->keepSourceMapComment(false);
        $compressor->setLineBreakPosition(0);
        $output_css = $this->CSS;
        //$output_css = $compressor->run($this->CSS);

        file_put_contents($path, $output_css);
    }
    
}
