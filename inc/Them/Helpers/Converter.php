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
        if( isset($colorArray['rgba']) && $colorArray['rgba'] ){
            return $colorArray['rgba'];
        }
        if( isset($colorArray['color']) && $colorArray['color'] ){
            return $colorArray['color'];
        }
        return 'transparent';
    }
    
    public static function BackgroundPattern($pattern){
        return 'url("' . $pattern . '") 0 0 repeat';
    }
    
    public static function BackgroundImage($image){
        $defaults = [
            'background-color'      => 'transparent',
            'background-image'      => '',
            'background-position'   => '',
            'background-size'       => '',
            'background-repeat'     => '',
            'background-attachment' => ''
        ];
        
        $imageExtras = array_diff_key($image, $defaults);
        $image = array_diff_key($image, $imageExtras);
        
        $image = array_filter($image);
        $args = wp_parse_args($image, $defaults);
        $args = array_filter($args);
        
        if(isset($args['background-image']) && $args['background-image']){
            $args['background-image'] = 'url("' . $args['background-image'] . '")';
        }
        
        if(isset($args['background-position']) && $args['background-position']){
            if(isset($args['background-size']) && $args['background-size']){
                $args['background-position'] = $args['background-position'] . '/' . $args['background-size'];
                unset($args['background-size']);
            }
        }

        return implode(' ', $args);
    }
    
    public static function Background($className, $setting){
        $options = Registry::getOptions($className);

        $type       = $options[ $setting . '-' . 'type' ];
        $color      = $options[ $setting . '-' . 'color' ];
        $pattern    = $options[ $setting . '-' . 'pattern' ];
        $image      = $options[ $setting . '-' . 'image' ];
        
        switch($type){
            case 'color':
                return self::RGBAToColor($color);
                break;
            case 'pattern':
                return self::BackgroundPattern($pattern);
                break;
            case 'image':
                return self::BackgroundImage($image);
                break;
        }
    }
    
    private static function calculateHeightDimension($newWidth, $ratio) {
        $newHeight = 0;

        if ($ratio < 1) {
            $newHeight = $newWidth * $ratio;
        } else {
            $newHeight = $newWidth / $ratio;
        }
        
        return intval($newHeight);
    }
    
    private static function calculateWidthDimension($newHeight, $ratio) {
        $newWidth = 0;

        if ($ratio < 1) {
            $newWidth = $newHeight / $ratio;
        } else {
            $newWidth = $newHeight * $ratio;
        }
        
        return intval($newWidth);
    }
    
    public static function customImageSizeToCSS($origWidth, $newWidth, $origHeight, $newHeight, $customWidth, $customHeight) {
        
        $origWidth = intval($origWidth);
        $newWidth = intval($newWidth);
        $origHeight = intval($origHeight);
        $newHeight = intval($newHeight);
        
        $dimensions = [
            'width' => $newWidth,
            'height' => $newHeight
        ];

        if ($customWidth && $customHeight) {
            return $dimensions;
        }
        
        $ratio = $origWidth / $origHeight;
        
        if($customWidth){
            $dimensions['height'] = self::calculateHeightDimension($newWidth, $ratio);
        }
        
        if($customHeight){
            $dimensions['width'] = self::calculateWidthDimension($newHeight, $ratio);
        }

        return $dimensions;
    }

}
