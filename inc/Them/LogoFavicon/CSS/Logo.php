<?php

namespace Them\LogoFavicon\CSS;

use Them\LogoFavicon;
use Them\ICSS;
use Them\Helpers;

class Logo implements ICSS {
     
    public function getCSS() {
        $logo = new LogoFavicon\Main\Logo;
        
        $defaultLogoPadding = $logo->getDefaultLogoPadding();  
        $defaultLogoPadding = Helpers\Converter::spacingToCSS($defaultLogoPadding, 'padding');
        
        $defaultLogoMargin = $logo->getDefaultLogoMargin();  
        $defaultLogoMargin = Helpers\Converter::spacingToCSS($defaultLogoMargin, 'margin');
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.logo-col' => [
                'padding' => $defaultLogoPadding,
                'margin' => $defaultLogoMargin
            ]
        ];
        
        $defaultLogo = $logo->getDefaultLogo();
        
        if ($defaultLogo):

            $defaultLogoWidth = $defaultLogo['width'];
            $defaultLogoHeight = $defaultLogo['height'];
            $defaultLogoUrl = $defaultLogo['url'];

            if ($logo->customWidthEnable() || $logo->customHeightEnable()):
                $defaultLogoCustomWidth = $logo->getDefaultLogoCustomWidth();
                $defaultLogoCustomHeight = $logo->getDefaultLogoCustomHeight();
                $sizes = Helpers\Converter::customImageSizeToCSS(
                        $defaultLogoWidth,
                        $defaultLogoCustomWidth['width'],
                        $defaultLogoHeight,
                        $defaultLogoCustomHeight['height'],
                        $logo->customWidthEnable(),
                        $logo->customHeightEnable()
                );
                
                $defaultLogoWidth = $sizes['width'];
                $defaultLogoHeight = $sizes['height'];
            endif;

            $cssBlocks[] = [
                '.logo-col #logo' => [
                    'background-image' => 'url("' . $defaultLogoUrl . '")',
                    'background-size' => $defaultLogoWidth . 'px ' . $defaultLogoHeight . 'px',
                    'background-repeat' => 'no-repeat',
                    'display' => 'block',
                    'width' => $defaultLogoWidth . 'px',
                    'height' => $defaultLogoHeight . 'px',
                ]
            ];

        endif;

        return $cssBlocks;
    }

    public function getCSSMedia() {
        return [];
    }
    
    public function getCSSMediaRetina() {
        return [];
    }
    
}
