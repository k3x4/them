<?php

namespace Them\Helpers;

class Converter {
    
    public static function spacingToCSS($spacing, $mode){
        $sameAll = intval($spacing['sameall']);
        $CSS = [];
        switch($sameAll){
            case 0:
                $CSS[] = $spacing[ $mode . '-top' ];
                $CSS[] = $spacing[ $mode . '-right' ];
                $CSS[] = $spacing[ $mode . '-bottom' ];
                $CSS[] = $spacing[ $mode . '-left' ];
                break;
            case 1:
                $CSS[] = $spacing[ $mode . '-top' ];
                break;
        }
        return implode(' ', $CSS);
    }
    
    public static function fontToCSS($font){
        $defaults = [
            'font-style'     => '',
            'font-variant'   => '',
            'font-weight'    => '',
            'font-size'      => 'inherit',
            'line-height'    => 'inherit',
            'font-family'    => 'inherit'
        ];
        
        $font['font-family'] = "'" . $font['font-family'] . "'";
        if($font['google']){
            $font['font-family'] .= ', sans-serif';
        }
        
        $fontExtras = array_diff_key($font, $defaults);
        $font = array_diff_key($font, $fontExtras);
        
        $font = array_filter($font);
        $args = wp_parse_args($font, $defaults);
        $args = array_filter($args);
        
        $args['font-size'] = $args['font-size'] . '/' . $args['line-height'];
        unset($args['line-height']);
        
        $CSS = implode(' ', $args);
        return $CSS;
    }
    
    public static function RGBAToColor($colorArray){
        if( isset($colorArray['rgba']) ){
            return $colorArray['rgba'];
        }
        if( isset($colorArray['color']) ){
            return $colorArray['color'];
        }
        return 'transparent';
    }
    
}
