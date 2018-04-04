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
                
                /*** DEFAULT LOGO ***/
                [
                    'id' => 'logofavicon_logo_default-section-start',
                    'type' => 'section',
                    'title' => __('Default logo', THEME_DOMAIN),
                    'indent' => true 
                ],
                [
                    'id' => 'logofavicon_logo_default',
                    'type' => 'media',
                    'title' => __('Default logo', THEME_DOMAIN),
                    'subtitle' => __('Select an image file for your logo.', THEME_DOMAIN),
                    'compiler' => 'true'
                ],
                [
                    'id' => 'logofavicon_logo_default-retina',
                    'type' => 'media',
                    'title' => __('Retina default logo', THEME_DOMAIN),
                    'subtitle' => __('Select an image file for the retina version of the logo. It should be exactly 2x the size of the main logo.', THEME_DOMAIN),
                    'compiler' => 'true'
                ],
                [
                    'id' => 'logofavicon_logo_default-custom-width',
                    'type' => 'switch',
                    'title' => __('Default logo maximum width', THEME_DOMAIN),
                    'subtitle' => __('Look, it\'s on!', THEME_DOMAIN),
                    'default' => false,
                ],
                [
                    'id' => 'logofavicon_logo_default-custom-width-size',
                    'type' => 'dimensions',
                    'units' => ['px'],
                    'height' => false,
                    'title' => __('Maximum logo width', THEME_DOMAIN),
                    //'subtitle' => __('Controls the overall site width.', THEME_DOMAIN),
                    //'default' => [
                    //    'width' => 150,
                    //],
                    'required' => ['logofavicon_logo_default-custom-width', '=', true]
                ],
                [
                    'id' => 'logofavicon_logo_default-custom-height',
                    'type' => 'switch',
                    'title' => __('Default logo maximum height', THEME_DOMAIN),
                    'subtitle' => __('Look, it\'s on!', THEME_DOMAIN),
                    'default' => false,
                ],
                [
                    'id' => 'logofavicon_logo_default-custom-height-size',
                    'type' => 'dimensions',
                    'units' => ['px'],
                    'width' => false,
                    'title' => __('Maximum logo height', THEME_DOMAIN),
                    //'subtitle' => __('Controls the overall site width.', THEME_DOMAIN),
                    //'default' => [
                    //    'height' => 100,
                    //],
                    'required' => ['logofavicon_logo_default-custom-height', '=', true]
                ],
                [
                    'id' => 'logofavicon_logo_default-padding',
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
                    'id' => 'logofavicon_logo_default-margin',
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
                ],
                [
                    'id'     => 'logofavicon_logo_default-section-end',
                    'type'   => 'section',
                    'indent' => false,
                ],
                
                /*** STICKY LOGO ***/
                [
                    'id' => 'logofavicon_logo_sticky-section-start',
                    'type' => 'section',
                    'title' => __('Sticky logo', THEME_DOMAIN),
                    'indent' => true 
                ],
                [
                    'id' => 'logofavicon_logo_sticky',
                    'type' => 'media',
                    'title' => __('Sticky header logo', THEME_DOMAIN),
                    'subtitle' => __('Select an image file for your sticky header logo.', THEME_DOMAIN),
                    'compiler' => 'true'
                ],
                [
                    'id' => 'logofavicon_logo_sticky-retina',
                    'type' => 'media',
                    'title' => __('Sticky retina logo', THEME_DOMAIN),
                    'subtitle' => __('Select an image file for the retina version of the logo. It should be exactly 2x the size of the main logo.', THEME_DOMAIN),
                    'compiler' => 'true'
                ],
                [
                    'id' => 'logofavicon_logo_sticky-custom-width',
                    'type' => 'switch',
                    'title' => __('Sticky logo maximum width', THEME_DOMAIN),
                    'subtitle' => __('Look, it\'s on!', THEME_DOMAIN),
                    'default' => false,
                ],
                [
                    'id' => 'logofavicon_logo_sticky-custom-width-size',
                    'type' => 'dimensions',
                    'units' => ['px'],
                    'height' => false,
                    'title' => __('Maximum sticky logo width', THEME_DOMAIN),
                    //'subtitle' => __('Controls the overall site width.', THEME_DOMAIN),
                    //'default' => [
                    //    'width' => 150,
                    //],
                    'required' => ['logofavicon_logo_sticky-custom-width', '=', true]
                ],
                [
                    'id' => 'logofavicon_logo_sticky-custom-height',
                    'type' => 'switch',
                    'title' => __('Sticky logo maximum height', THEME_DOMAIN),
                    'subtitle' => __('Look, it\'s on!', THEME_DOMAIN),
                    'default' => false,
                ],
                [
                    'id' => 'logofavicon_logo_sticky-custom-height-size',
                    'type' => 'dimensions',
                    'units' => ['px'],
                    'width' => false,
                    'title' => __('Maximum sticky logo height', THEME_DOMAIN),
                    //'subtitle' => __('Controls the overall site width.', THEME_DOMAIN),
                    //'default' => [
                    //    'height' => 100,
                    //],
                    'required' => ['logofavicon_logo_sticky-custom-height', '=', true]
                ],
                [
                    'id' => 'logofavicon_logo_sticky-padding',
                    'type' => 'them_spacing',
                    'mode' => 'padding',
                    'units' => ['px'],
                    'units_extended' => true,
                    'title' => __('Sticky logo padding', THEME_DOMAIN),
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
                    'id' => 'logofavicon_logo_sticky-margin',
                    'type' => 'them_spacing',
                    'mode' => 'margin',
                    'units' => ['px'],
                    'units_extended' => true,
                    'title' => __('Sticky logo margin', THEME_DOMAIN),
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
                ],
                [
                    'id'     => 'logofavicon_logo_sticky-section-end',
                    'type'   => 'section',
                    'indent' => false,
                ],
                
                /*** MOBILE LOGO ***/
                [
                    'id' => 'logofavicon_logo_mobile-section-start',
                    'type' => 'section',
                    'title' => __('Mobile logo', THEME_DOMAIN),
                    'indent' => true 
                ],
                [
                    'id' => 'logofavicon_logo_mobile',
                    'type' => 'media',
                    'title' => __('Mobile logo', THEME_DOMAIN),
                    'subtitle' => __('Select an image file for your mobile logo.', THEME_DOMAIN),
                    'compiler' => 'true'
                ],
                [
                    'id' => 'logofavicon_logo_mobile-retina',
                    'type' => 'media',
                    'title' => __('Retina mobile logo', THEME_DOMAIN),
                    'subtitle' => __('Select an image file for the retina version of the logo. It should be exactly 2x the size of the main logo.', THEME_DOMAIN),
                    'compiler' => 'true'
                ],
                [
                    'id' => 'logofavicon_logo_mobile-custom-width',
                    'type' => 'switch',
                    'title' => __('Mobile logo maximum width', THEME_DOMAIN),
                    'subtitle' => __('Look, it\'s on!', THEME_DOMAIN),
                    'default' => false,
                ],
                [
                    'id' => 'logofavicon_logo_mobile-custom-width-size',
                    'type' => 'dimensions',
                    'units' => ['px'],
                    'height' => false,
                    'title' => __('Maximum mobile logo width', THEME_DOMAIN),
                    //'subtitle' => __('Controls the overall site width.', THEME_DOMAIN),
                    //'default' => [
                    //    'width' => 150,
                    //],
                    'required' => ['logofavicon_logo_mobile-custom-width', '=', true]
                ],
                [
                    'id' => 'logofavicon_logo_mobile-custom-height',
                    'type' => 'switch',
                    'title' => __('Mobile logo maximum height', THEME_DOMAIN),
                    'subtitle' => __('Look, it\'s on!', THEME_DOMAIN),
                    'default' => false,
                ],
                [
                    'id' => 'logofavicon_logo_mobile-custom-height-size',
                    'type' => 'dimensions',
                    'units' => ['px'],
                    'width' => false,
                    'title' => __('Maximum mobile logo height', THEME_DOMAIN),
                    //'subtitle' => __('Controls the overall site width.', THEME_DOMAIN),
                    //'default' => [
                    //    'height' => 100,
                    //],
                    'required' => ['logofavicon_logo_mobile-custom-height', '=', true]
                ],
                [
                    'id' => 'logofavicon_logo_mobile-padding',
                    'type' => 'them_spacing',
                    'mode' => 'padding',
                    'units' => ['px'],
                    'units_extended' => true,
                    'title' => __('Mobile logo padding', THEME_DOMAIN),
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
                    'id' => 'logofavicon_logo_mobile-margin',
                    'type' => 'them_spacing',
                    'mode' => 'margin',
                    'units' => ['px'],
                    'units_extended' => true,
                    'title' => __('Mobile logo margin', THEME_DOMAIN),
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
                ],
                [
                    'id'     => 'logofavicon_logo_mobile-section-end',
                    'type'   => 'section',
                    'indent' => false,
                ],
                
            ]
        ]);
        
    }

}
