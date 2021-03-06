<?php

namespace Them\Helpers;

use Them\ICSS;

class CSS {

    private $CSSTable;
    private $CSSMediaTable;
    private $CSSMediaRetinaTable;
    
    public function __construct() {
        $this->CSSTable = [];
        $this->CSSMediaTable = [];
        $this->CSSMediaRetinaTable = [];
    }
    
    public function makeMediaCSS(Media\IMediaCSS $mediaCSS, $tag, $containerSize) {
        return $mediaCSS->getQueries($tag, $containerSize);
    }
    
    public function addCSS(ICSS $cssObj){
        $CSSArray = $cssObj->getCSS();
        $this->CSSTable = array_merge($this->CSSTable, $CSSArray);
    }
    
    public function addCSSMedia(ICSS $cssObj){
        $CSSMediaArray = $cssObj->getCSSMedia();
        $this->CSSMediaTable = $this->mediaMerge($this->CSSMediaTable, $CSSMediaArray);
    }
    
    public function addCSSMediaRetina(ICSS $cssObj){
        $CSSMediaArray = $cssObj->getCSSMediaRetina();
        $this->CSSMediaRetinaTable = $this->mediaMerge($this->CSSMediaRetinaTable, $CSSMediaArray);
    }
    
    public function mediaMerge(){
        $finalArray = [];
        $arrays = func_get_args();
        foreach($arrays as $mediaArray){
            foreach($mediaArray as $key => $value){
                if( ! isset($finalArray[$key]) ){
                    $finalArray[$key] = [];
                }
                $finalArray[$key] = array_merge($finalArray[$key], $value);
            }
        }
        return $finalArray;
    }
    
    public function getCSS(){
        return $this->CSSTable;
    }
    
    public function getCSSMedia(){
        return $this->CSSMediaTable;
    }
    
    public function getCSSMediaRetina(){
        return $this->CSSMediaRetinaTable;
    }

}
