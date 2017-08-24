<?php

namespace Them\Typography\Sections;

use Them\ISection;

class Body implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Body Typography', THEME_DOMAIN),
            'desc' => __('Body Typography Settings', THEME_DOMAIN),
            'id' => 'typography_body',
            'subsection' => true,
            'fields' => [
                [
                    'id' => 'typography_body_font',
                    'type' => 'typography',
                    'title' => __('Body Font', THEME_DOMAIN),
                    //'compiler'      => true,  // Use if you want to hook in your own CSS compiler
                    //'google'      => false,
                    // Disable google fonts. Won't work if you haven't defined your google api key
                    // Select a backup non-google font in addition to a google font
                    //'font-style'    => false, // Includes font-style and weight. Can use font-style or font-weight to declare
                    //'subsets'       => false, // Only appears if google is true and subsets not set to false
                    //'font-size'     => false,
                    //'line-height'   => false,
                    //'word-spacing'  => true,  // Defaults to false
                    //'letter-spacing'=> true,  // Defaults to false
                    //'color'         => false,
                    //'preview'       => false, // Disable the previewer
                    'all_styles' => true,
                    // Enable all Google Font style/weight variations to be added to the page
                    
                    // An array of CSS selectors to apply this font style to dynamically
                    //'compiler' => ['h2.site-description-compiler'),
                    // An array of CSS selectors to apply this font style to dynamically
                    'units' => 'px',
                    // Defaults to px
                    'subtitle' => __('These settings control the typography for all body text.', THEME_DOMAIN),
                    'default' => [
                        'color' => '#333',
                        'font-style' => '700',
                        'font-family' => 'Abel',
                        'google' => true,
                        'font-size' => '33px',
                        'line-height' => '40px'
                    ],
                ]
            ]
        ]);
        
    }

}
