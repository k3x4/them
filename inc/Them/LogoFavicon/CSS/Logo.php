<?php

namespace Them\LogoFavicon\CSS;

use Them\LogoFavicon;
use Them\ICSS;
use Them\Helpers;

class Logo implements ICSS {
    
    private $logo;
    
    public function __construct() {
        $this->logo = new LogoFavicon\Main\Logo;
    }
    
    private function getDefaultLogoSize() {
        $defaultLogo = $this->logo->getDefaultLogo();

        $dimensions = [
            'width'     => $defaultLogo['width'],
            'height'    => $defaultLogo['height']
        ];
        
        if ($this->logo->customWidthEnable() || $this->logo->customHeightEnable()) {
            $customWidth = $this->logo->getDefaultLogoCustomWidth();
            $customHeight = $this->logo->getDefaultLogoCustomHeight();
            $dimensions = Helpers\Converter::customImageSizeToCSS(
                    $dimensions['width'],
                    $customWidth['width'],
                    $dimensions['height'],
                    $customHeight['height'],
                    $this->logo->customWidthEnable(),
                    $this->logo->customHeightEnable()
            );
        }
        
        return $dimensions;
    }

    private function getDefaultLogo(){
        $defaultLogo = $this->logo->getDefaultLogo();

        $cssBlock = [];
        
        if (isset($defaultLogo['url']) && $defaultLogo['url']) {
            
            $defaultLogoUrl = $defaultLogo['url'];
            $dimensions = $this->getDefaultLogoSize();

            $cssBlock = [
                '.logo-col #logo' => [
                    'background-image' => 'url("' . $defaultLogoUrl . '")',
                    'background-size' => $dimensions['width'] . 'px ' . $dimensions['height'] . 'px',
                    'background-repeat' => 'no-repeat',
                    'display' => 'block',
                    'width' => $dimensions['width'] . 'px',
                    'height' => $dimensions['height'] . 'px',
                ]
            ];

        }

        return $cssBlock;
    }
    
    private function getDefaultLogoSpacing(){
        $logo = new LogoFavicon\Main\Logo;

        $padding = $this->logo->getDefaultLogoPadding();
        $padding = Helpers\Converter::spacingToCSS($padding, 'padding');

        $margin = $this->logo->getDefaultLogoMargin();
        $margin = Helpers\Converter::spacingToCSS($margin, 'margin');

        $cssBlock = [
            '.logo-col' => [
                'padding' => $padding,
                'margin' => $margin
            ]
        ];
        
        return $cssBlock;
    }
    
    public function getDefaultRetinaLogo(){
        $defaultRetinaLogo = $this->logo->getDefaultRetinaLogo();

        $cssBlock = [];
        
        if (isset($defaultRetinaLogo['url']) && $defaultRetinaLogo['url']) {
            
            $defaultRetinaLogoUrl = $defaultRetinaLogo['url'];
            $dimensions = $this->getDefaultLogoSize();

            $cssBlock = [
                '.logo-col #logo' => [
                    'background-image' => 'url("' . $defaultRetinaLogoUrl . '")'
                ]
            ];

        }

        return $cssBlock;
    }
    
    public function getCSS() {
        $cssBlocks = [];
        
        $cssBlocks[] = $this->getDefaultLogo();
        $cssBlocks[] = $this->getDefaultLogoSpacing();

        return $cssBlocks;
    }

    public function getCSSMedia() {
        return [];
    }

    public function getCSSMediaRetina() {
        $cssBlocks = [];
        
        $cssBlocks[] = $this->getDefaultRetinaLogo();

        return $cssBlocks;
    }

}
