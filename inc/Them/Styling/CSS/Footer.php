<?php

namespace Them\Styling\CSS;

use Them\Styling;
use Them\ICSS;

class Footer implements ICSS {
     
    public function getCSS() {
        $footer = new Styling\Main\Footer;
        $general = new Styling\Main\General;
        
        $footerBackground = $footer->getFooterBackground();
        $containerBackground = $footer->getContainerBackground();
        $widgetsBackground = $footer->getWidgetsBackground();
        
        $widgetsTextColor = $footer->getWidgetsTextColor();
        
        $widgetsLinksColor = $footer->getWidgetsLinksTextColor();
        $widgetsLinksHoverColor = $footer->getWidgetsLinksTextHoverColor();
        
        $generalLinkHoverColor = $general->getLinkHoverColor();
        
        $cssBlocks = [];
        $cssBlocks[] = [
            '.site-footer' => [
                'background' => $footerBackground
            ],
            '.site-footer .footer.container, ' .
            '.site-footer .footer.container-fluid' => [
                'background' => $containerBackground
            ],
            '.site-footer .footer.container .widget-area, ' .
            '.site-footer .footer.container-fluid .widget-area' => [
                'color' => $widgetsTextColor,
                'background' => $widgetsBackground
            ]
        ];
        
        if($footer->widgetsLinksTextColorOverride()):
            
            $cssBlocks[] = [
                '.site-footer .footer.container .widget-area a, ' .
                '.site-footer .footer.container .widget-area a:visited, ' .
                '.site-footer .footer.container-fluid .widget-area a, ' .
                '.site-footer .footer.container-fluid .widget-area a:visited' => [
                    'color' => $widgetsLinksColor,
                ]
            ];
        
            if($footer->widgetsLinksTextColorHoverChange()):
                
                $cssBlocks[] = [
                    '.site-footer .footer.container .widget-area a:hover, ' .
                    '.site-footer .footer.container .widget-area a:focus, ' .
                    '.site-footer .footer.container-fluid .widget-area a:hover, ' .
                    '.site-footer .footer.container-fluid .widget-area a:focus' => [
                        'color' => $widgetsLinksHoverColor,
                    ]
                ];
                
            else:
                
                $cssBlocks[] = [
                    '.site-footer .footer.container .widget-area a:hover, ' .
                    '.site-footer .footer.container .widget-area a:focus, ' .
                    '.site-footer .footer.container-fluid .widget-area a:hover, ' .
                    '.site-footer .footer.container-fluid .widget-area a:focus' => [
                        'color' => $generalLinkHoverColor,
                    ]
                ];
                
            endif;
            
        endif;
        
        return $cssBlocks;
    }

    public function getCSSMedia() {
        return [];
    }
    
}
