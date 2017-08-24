<?php

namespace Them\Header\Sections;

use Them\ISection;

class Menu implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Menu', THEME_DOMAIN),
            'desc' => __('Menu Settings', THEME_DOMAIN),
            'id' => 'header_menu',
            'subsection' => true,
            'fields' => [
                [
                    'id' => 'header_menu_padding',
                    'type' => 'them_spacing',
                    'mode' => 'padding',
                    'units' => ['px'],
                    'units_extended' => true,
                    'title' => __('Menu bar padding', THEME_DOMAIN),
                    'subtitle' => __('Allow your users to choose the spacing or margin they want.', 'redux-framework-demo'),
                    'desc' => __('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'redux-framework-demo'),
                    'default' => [
                        'sameall' => '1',
                        'padding-top' => '0px',
                        'padding-right' => '0px',
                        'padding-bottom' => '0px',
                        'padding-left' => '0px',
                        'units' => 'px',
                    ],
                    'select2' => ['allowClear' => false],
                    'required' => ['header_layout_orientation', '=', ORIENTATION_HORIZONTAL]
                ],
                [
                    'id' => 'header_menu_padding-items',
                    'type' => 'them_spacing',
                    'mode' => 'padding',
                    'units' => ['px'],
                    'units_extended' => true,
                    'title' => __('Menu items padding', THEME_DOMAIN),
                    'subtitle' => __('Allow your users to choose the spacing or margin they want.', 'redux-framework-demo'),
                    'desc' => __('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'redux-framework-demo'),
                    'default' => [
                        'sameall' => '0',
                        'padding-top' => '15px',
                        'padding-right' => '20px',
                        'padding-bottom' => '15px',
                        'padding-left' => '20px',
                        'units' => 'px',
                    ],
                    'select2' => ['allowClear' => false],
                ],
                [
                    'id' => 'header_menu_custom-height',
                    'type' => 'switch',
                    'title' => __('Custom menu height', THEME_DOMAIN),
                    'subtitle' => __('Look, it\'s on!', THEME_DOMAIN),
                    'default' => false,
                    'required' => ['header_layout_orientation', '=', ORIENTATION_HORIZONTAL]
                ],
                [
                    'id' => 'header_menu_orientation-h-height',
                    'type' => 'dimensions',
                    'width' => false,
                    'units' => ['px', 'em', '%'],
                    'title' => __('Dimensions (Width/Height) Option', THEME_DOMAIN),
                    'subtitle' => __('Allow your users to choose width, height, and/or unit.', THEME_DOMAIN),
                    'desc' => __('Enable or disable any piece of this field. Width, Height, or Units.', THEME_DOMAIN),
                    'default' => [
                        'height' => '80',
                    ],
                    'required' => ['header_menu_custom-height', '=', true]
                ],
                [
                    'id' => 'header_menu_custom-width',
                    'type' => 'switch',
                    'title' => __('Custom menu width', THEME_DOMAIN),
                    'subtitle' => __('Look, it\'s on!', THEME_DOMAIN),
                    'default' => false,
                    'required' => ['header_layout_orientation', '=', ORIENTATION_VERTICAL]
                ],
                [
                    'id' => 'header_menu_orientation-v-width',
                    'type' => 'dimensions',
                    'height' => false,
                    'units' => ['px', 'em', '%'],
                    'title' => __('Dimensions (Width/Height) Option', THEME_DOMAIN),
                    'subtitle' => __('Allow your users to choose width, height, and/or unit.', THEME_DOMAIN),
                    'desc' => __('Enable or disable any piece of this field. Width, Height, or Units.', THEME_DOMAIN),
                    'default' => [
                        'width' => '100',
                        'units' => '%'
                    ],
                    'required' => ['header_menu_custom-width', '=', true]
                ],
            ]
        ]);
        
    }

}
