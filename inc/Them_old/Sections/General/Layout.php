<?php

namespace Them\Sections\General;

use Them\Sections\ISection;

class Layout implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Layout', THEME_DOMAIN),
            'desc' => __('Layout Settings', THEME_DOMAIN),
            'id' => 'general_layout',
            'subsection' => true,
            'fields' => [
                [
                    'id' => 'general_layout_container-type',
                    'type' => 'button_set',
                    'title' => __('Layout', THEME_DOMAIN),
                    'subtitle' => __('Controls the site layout.', THEME_DOMAIN),
                    'options' => [
                        CONTAINER_FIXED => 'Fixed',
                        CONTAINER_FLUID => 'Fluid'
                    ],
                    'default' => CONTAINER_FIXED
                ],
                [
                    'id' => 'general_layout_container-fixed-width',
                    'type' => 'dimensions',
                    'units' => ['px'],
                    'height' => false,
                    'title' => __('Maximum container width', THEME_DOMAIN),
                    'subtitle' => __('Controls the overall site width.', THEME_DOMAIN),
                    'default' => [
                        'width' => 1100,
                    ],
                    'required' => ['general_layout_container-type', '=', CONTAINER_FIXED]
                ],
                [
                    'id' => 'general_layout_container-fluid-width',
                    'type' => 'dimensions',
                    'units' => ['%'],
                    'height' => false,
                    'title' => __('Maximum container width', THEME_DOMAIN),
                    'subtitle' => __('Controls the overall site width.', THEME_DOMAIN),
                    'default' => [
                        'width' => 100,
                    ],
                    'required' => ['general_layout_container-type', '=', CONTAINER_FLUID]
                ],
                [
                    'id' => 'general_layout_general-padding',
                    'type' => 'them_spacing',
                    'mode' => 'padding',
                    'units' => ['px', 'em'],
                    'units_extended' => true,
                    'title' => __('General padding (for all items)', THEME_DOMAIN),
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
                    'id' => 'general_layout_content-padding',
                    'type' => 'them_spacing',
                    'mode' => 'padding',
                    'units' => ['px', 'em'],
                    'units_extended' => true,
                    'title' => __('Content block padding', THEME_DOMAIN),
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
                ]
            ]
        ]);
        
    }

}
