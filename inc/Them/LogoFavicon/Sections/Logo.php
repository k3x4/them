<?php

namespace Them\LogoFavicon\Sections;

use Them\ISection;

class Logo implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Logo', THEME_DOMAIN),
            'desc' => __('Logo Settings', THEME_DOMAIN),
            'id' => 'logofavicon_logo',
            'subsection' => true,
            'fields' => [
                [
                    'id' => 'logofavicon_logo_default',
                    'type' => 'media',
                    'title' => __('Default logo', THEME_DOMAIN),
                    'subtitle' => __('Select an image file for your logo.', THEME_DOMAIN),
                    'compiler' => 'true'
                ],
                [
                    'id' => 'logofavicon_logo_retina',
                    'type' => 'media',
                    'title' => __('Retina default logo', THEME_DOMAIN),
                    'subtitle' => __('Select an image file for the retina version of the logo. It should be exactly 2x the size of the main logo.', THEME_DOMAIN),
                    'compiler' => 'true'
                ],
                [
                    'id' => 'logofavicon_logo_sticky',
                    'type' => 'media',
                    'title' => __('Sticky header logo', THEME_DOMAIN),
                    'subtitle' => __('Select an image file for your sticky header logo.', THEME_DOMAIN),
                    'compiler' => 'true'
                ],
                [
                    'id' => 'logofavicon_logo_mobile',
                    'type' => 'media',
                    'title' => __('Mobile logo', THEME_DOMAIN),
                    'subtitle' => __('Select an image file for your mobile logo.', THEME_DOMAIN),
                    'compiler' => 'true'
                ],
                [
                    'id' => 'logofavicon_logo_padding',
                    'type' => 'them_spacing',
                    'mode' => 'padding',
                    'units' => ['px'],
                    'units_extended' => true,
                    'title' => __('Logo padding', THEME_DOMAIN),
                    'subtitle' => __('Allow your users to choose the spacing or margin they want.', 'redux-framework-demo'),
                    'desc' => __('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'redux-framework-demo'),
                    'default' => [
                        'sameall' => '0',
                        'padding-top' => '20px',
                        'padding-right' => '15px',
                        'padding-bottom' => '20px',
                        'padding-left' => '15px',
                        'units' => 'px'
                    ],
                    'select2' => ['allowClear' => false]
                ],
                [
                    'id' => 'logofavicon_logo_margin',
                    'type' => 'them_spacing',
                    'mode' => 'margin',
                    'units' => ['px'],
                    'units_extended' => true,
                    'title' => __('Logo margin', THEME_DOMAIN),
                    'subtitle' => __('Allow your users to choose the spacing or margin they want.', 'redux-framework-demo'),
                    'desc' => __('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'redux-framework-demo'),
                    'default' => [
                        'sameall' => '1',
                        'margin-top' => '0px',
                        'margin-right' => '0px',
                        'margin-bottom' => '0px',
                        'margin-left' => '0px',
                        'units' => 'px'
                    ],
                    'select2' => ['allowClear' => false]
                ]                
            ]
        ]);
        
    }

}
