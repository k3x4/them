<?php

namespace Them\Sections\Header;

use Them\Sections\ISection;

class Layout implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Layout', THEME_DOMAIN),
            'desc' => __('Layout Settings', THEME_DOMAIN),
            'id' => 'header_layout',
            'subsection' => true,
            'fields' => [
                [
                    'id' => 'header_layout_container-general',
                    'type' => 'switch',
                    'title' => __('Same width with general settings', THEME_DOMAIN),
                    'subtitle' => __('Look, it\'s on!', THEME_DOMAIN),
                    'default' => true,
                ],
                [
                    'id' => 'header_layout_container-type',
                    'type' => 'button_set',
                    'title' => __('Layout', THEME_DOMAIN),
                    'subtitle' => __('Controls the site layout.', THEME_DOMAIN),
                    'options' => [
                        CONTAINER_FIXED => 'Fixed',
                        CONTAINER_FLUID => 'Fluid'
                    ],
                    'default' => CONTAINER_FIXED,
                    'required' => ['header_layout_container-general', '=', false]
                ],
                [
                    'id' => 'header_layout_container-fixed-width',
                    'type' => 'dimensions',
                    'units' => ['px'],
                    'height' => false,
                    'title' => __('Maximum container width', THEME_DOMAIN),
                    'subtitle' => __('Controls the overall site width.', THEME_DOMAIN),
                    'default' => [
                        'width' => 1100,
                    ],
                    'required' => ['header_layout_container-type', '=', CONTAINER_FIXED]
                ],
                [
                    'id' => 'header_layout_container-fluid-width',
                    'type' => 'dimensions',
                    'units' => ['%'],
                    'height' => false,
                    'title' => __('Maximum container width', THEME_DOMAIN),
                    'subtitle' => __('Controls the overall site width.', THEME_DOMAIN),
                    'default' => [
                        'width' => 100,
                    ],
                    'required' => ['header_layout_container-type', '=', CONTAINER_FLUID]
                ],
                [
                    'id' => 'header_layout_orientation',
                    'type' => 'select',
                    'title' => __('Layout orientation', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'desc' => __('', THEME_DOMAIN),
                    'options' => [
                        ORIENTATION_HORIZONTAL => 'Horizontal',
                        ORIENTATION_VERTICAL => 'Vertical'
                    ],
                    'default' => ORIENTATION_HORIZONTAL,
                    'select2' => ['allowClear' => false],
                ],
                [
                    'id' => 'header_layout_orientation-' . ORIENTATION_HORIZONTAL,
                    'type' => 'select',
                    'title' => __('Lines count', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'desc' => __('', THEME_DOMAIN),
                    'options' => [
                        '1' => 'One line',
                        '2' => 'Two lines'
                    ],
                    'default' => '1',
                    'select2' => ['allowClear' => false],
                    'required' => ['header_layout_orientation', '=', ORIENTATION_HORIZONTAL]
                ],
                [
                    'id' => 'header_layout_orientation-' . ORIENTATION_VERTICAL,
                    'type' => 'select',
                    'title' => __('Lines count', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'desc' => __('', THEME_DOMAIN),
                    'options' => [
                        '1' => 'Standard (always visible)',
                        '2' => 'Slide left or right'
                    ],
                    'default' => '1',
                    'select2' => ['allowClear' => false],
                    'required' => ['header_layout_orientation', '=', ORIENTATION_VERTICAL]
                ],
                [
                    'id' => 'header_layout_orientation-h1',
                    'type' => 'image_select',
                    'title' => __('Layout scheme', THEME_DOMAIN),
                    'subtitle' => __('+++', THEME_DOMAIN),
                    'options' => [
                        ORIENTATION_HORIZONTAL_TYPE1_LEFT => [
                            'alt' => 'Horizontal left Logo',
                            'img' => THEME_URL . '/inc/preview/header/images/' . ORIENTATION_HORIZONTAL_TYPE1_LEFT . '.jpg'
                        ],
                        ORIENTATION_HORIZONTAL_TYPE1_CENTER => [
                            'alt' => 'Horizontal center logo',
                            'img' => THEME_URL . '/inc/preview/header/images/' . ORIENTATION_HORIZONTAL_TYPE1_CENTER . '.jpg'
                        ],
                        ORIENTATION_HORIZONTAL_TYPE1_RIGHT => [
                            'alt' => 'Horizontal right logo',
                            'img' => THEME_URL . '/inc/preview/header/images/' . ORIENTATION_HORIZONTAL_TYPE1_RIGHT . '.jpg'
                        ]
                    ],
                    'default' => ORIENTATION_HORIZONTAL_TYPE1_LEFT,
                    'required' => ['header_layout_orientation-' . ORIENTATION_HORIZONTAL, '=', '1']
                ],
                [
                    'id' => 'header_layout_logo-1-column-size',
                    'type' => 'select',
                    'title' => __('Logo column size', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'desc' => __('', THEME_DOMAIN),
                    'options' => [
                        '1' => '8.33%',
                        '2' => '16.66%',
                        '3' => '25%',
                        '4' => '33.33%',
                        '5' => '41.66%',
                        '6' => '50%',
                    ],
                    'default' => '3',
                    'select2' => ['allowClear' => false],
                    'required' => ['header_layout_orientation-h1', 'not_contain', 'c']
                ],
                [
                    'id' => 'header_layout_menu-vertical-align',
                    'type' => 'select',
                    'title' => __('Menu vertical align', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'desc' => __('', THEME_DOMAIN),
                    'options' => [
                        'top' => 'Top',
                        'middle' => 'Middle',
                        'bottom' => 'Bottom',
                    ],
                    'default' => 'middle',
                    'select2' => ['allowClear' => false],
                    'required' => ['header_layout_orientation-' . ORIENTATION_HORIZONTAL, '=', '1']
                ],
                [
                    'id' => 'header_layout_custom-height',
                    'type' => 'switch',
                    'title' => __('Custom height', THEME_DOMAIN),
                    'subtitle' => __('Look, it\'s on!', THEME_DOMAIN),
                    'default' => false,
                ],
                [
                    'id' => 'header_layout_orientation-h-height',
                    'type' => 'dimensions',
                    'width' => false,
                    'units' => ['px', 'em', '%'],
                    'title' => __('Dimensions (Width/Height) Option', THEME_DOMAIN),
                    'subtitle' => __('Allow your users to choose width, height, and/or unit.', THEME_DOMAIN),
                    'desc' => __('Enable or disable any piece of this field. Width, Height, or Units.', THEME_DOMAIN),
                    'default' => [
                        'height' => '200',
                    ],
                    'required' => [
                        ['header_layout_orientation', '=', ORIENTATION_HORIZONTAL],
                        ['header_layout_custom-height', '=', true]
                    ]    
                ],
                [
                    'id' => 'header_layout_logo-vertical-align',
                    'type' => 'select',
                    'title' => __('Logo vertical align', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'desc' => __('', THEME_DOMAIN),
                    'options' => [
                        'top' => 'Top',
                        'middle' => 'Middle',
                        'bottom' => 'Bottom',
                    ],
                    'default' => 'middle',
                    'select2' => ['allowClear' => false],
                    'required' => [
                        ['header_layout_orientation-' . ORIENTATION_HORIZONTAL, '=', '1'],
                        ['header_layout_custom-height', '=', true]
                    ]    
                ],
                [
                    'id' => 'header_layout_logo-2-column-size',
                    'type' => 'select',
                    'title' => __('Logo column size', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'desc' => __('', THEME_DOMAIN),
                    'options' => [
                        '2' => '16.66%',
                        '4' => '33.33%',
                        '6' => '50%',
                    ],
                    'default' => '4',
                    'select2' => ['allowClear' => false],
                    'required' => ['header_layout_orientation-h1', 'contains', 'c']
                ],
                [
                    'id' => 'header_layout_orientation-h2',
                    'type' => 'image_select',
                    'title' => __('Layout scheme', THEME_DOMAIN),
                    'subtitle' => __('+++', THEME_DOMAIN),
                    'options' => [
                        ORIENTATION_HORIZONTAL_TYPE2_LEFT => [
                            'alt' => 'Horizontal left Logo',
                            'img' => THEME_URL . '/inc/preview/header/images/' . ORIENTATION_HORIZONTAL_TYPE2_LEFT . '.jpg'
                        ],
                        ORIENTATION_HORIZONTAL_TYPE2_CENTER => [
                            'alt' => 'Horizontal center logo',
                            'img' => THEME_URL . '/inc/preview/header/images/' . ORIENTATION_HORIZONTAL_TYPE2_CENTER . '.jpg'
                        ],
                        ORIENTATION_HORIZONTAL_TYPE2_RIGHT => [
                            'alt' => 'Horizontal right logo',
                            'img' => THEME_URL . '/inc/preview/header/images/' . ORIENTATION_HORIZONTAL_TYPE2_RIGHT . '.jpg'
                        ]
                    ],
                    'default' => 'h2l',
                    'required' => ['header_layout_orientation-' . ORIENTATION_HORIZONTAL, '=', '2']
                ],
                [
                    'id' => 'header_layout_orientation-v-width',
                    'type' => 'dimensions',
                    'height' => false,
                    'units' => ['px', 'em', '%'],
                    'title' => __('Dimensions (Width/Height) Option', THEME_DOMAIN),
                    'subtitle' => __('Allow your users to choose width, height, and/or unit.', THEME_DOMAIN),
                    'desc' => __('Enable or disable any piece of this field. Width, Height, or Units.', THEME_DOMAIN),
                    'default' => [
                        'width' => '250',
                    ],
                    'required' => ['header_layout_orientation', '=', ORIENTATION_VERTICAL]
                ],
                [
                    'id' => 'header_layout_padding',
                    'type' => 'them_spacing',
                    'mode' => 'padding',
                    'units' => ['px'],
                    'units_extended' => true,
                    'title' => __('Header padding', THEME_DOMAIN),
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
                    'id' => 'header_layout_orientation-v1',
                    'type' => 'image_select',
                    'title' => __('Layout scheme', THEME_DOMAIN),
                    'subtitle' => __('+++', THEME_DOMAIN),
                    'options' => [
                        ORIENTATION_VERTICAL_TYPE1_LEFT => [
                            'alt' => 'Vertical left always open',
                            'img' => THEME_URL . '/inc/preview/header/images/' . ORIENTATION_VERTICAL_TYPE1_LEFT . '.jpg'
                        ],
                        ORIENTATION_VERTICAL_TYPE1_RIGHT => [
                            'alt' => 'Vertical right always open',
                            'img' => THEME_URL . '/inc/preview/header/images/' . ORIENTATION_VERTICAL_TYPE1_RIGHT . '.jpg'
                        ]
                    ],
                    'default' => 'v1l',
                    'required' => ['header_layout_orientation-' . ORIENTATION_VERTICAL, '=', '1']
                ],
                [
                    'id' => 'header_layout_orientation-v2',
                    'type' => 'image_select',
                    'title' => __('Layout scheme', THEME_DOMAIN),
                    'subtitle' => __('+++', THEME_DOMAIN),
                    'options' => [
                        ORIENTATION_VERTICAL_TYPE2_LEFT => [
                            'alt' => 'Vertical left slide',
                            'img' => THEME_URL . '/inc/preview/header/images/' . ORIENTATION_VERTICAL_TYPE2_LEFT . '.jpg'
                        ],
                        ORIENTATION_VERTICAL_TYPE2_RIGHT => [
                            'alt' => 'Vertical right slide',
                            'img' => THEME_URL . '/inc/preview/header/images/' . ORIENTATION_VERTICAL_TYPE2_RIGHT . '.jpg'
                        ]
                    ],
                    'default' => 'v2l',
                    'required' => ['header_layout_orientation-' . ORIENTATION_VERTICAL, '=', '2']
                ]
            ]
        ]);
        
    }

}
