<?php

namespace Them\Footer\Sections;

use Them\ISection;

class Layout implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Layout', THEME_DOMAIN),
            'desc' => __('Layout Settings', THEME_DOMAIN),
            'id' => 'footer_layout',
            'subsection' => true,
            'fields' => [
                [
                    'id' => 'footer_layout_container-general',
                    'type' => 'switch',
                    'title' => __('Same width with general settings', THEME_DOMAIN),
                    'subtitle' => __('Look, it\'s on!', THEME_DOMAIN),
                    'default' => true,
                ],
                [
                    'id' => 'footer_layout_container-type',
                    'type' => 'button_set',
                    'title' => __('Layout', THEME_DOMAIN),
                    'subtitle' => __('Controls the site layout.', THEME_DOMAIN),
                    'options' => [
                        CONTAINER_FIXED => 'Fixed',
                        CONTAINER_FLUID => 'Fluid'
                    ],
                    'default' => CONTAINER_FIXED,
                    'required' => ['footer_layout_container-general', '=', false]
                ],
                [
                    'id' => 'footer_layout_container-fixed-width',
                    'type' => 'dimensions',
                    'units' => ['px'],
                    'height' => false,
                    'title' => __('Maximum container width', THEME_DOMAIN),
                    'subtitle' => __('Controls the overall site width.', THEME_DOMAIN),
                    'default' => [
                        'width' => 1100,
                    ],
                    'required' => ['footer_layout_container-type', '=', CONTAINER_FIXED]
                ],
                [
                    'id' => 'footer_layout_container-fluid-width',
                    'type' => 'dimensions',
                    'units' => ['%'],
                    'height' => false,
                    'title' => __('Maximum container width', THEME_DOMAIN),
                    'subtitle' => __('Controls the overall site width.', THEME_DOMAIN),
                    'default' => [
                        'width' => 100,
                    ],
                    'required' => ['footer_layout_container-type', '=', CONTAINER_FLUID]
                ],
                [
                    'id' => 'footer_layout_wrapper-padding',
                    'type' => 'them_spacing',
                    'mode' => 'padding',
                    'units' => ['px', 'em'],
                    'units_extended' => true,
                    'title' => __('Wrapper padding', THEME_DOMAIN),
                    'subtitle' => __('Allow your users to choose the spacing or margin they want.', 'redux-framework-demo'),
                    'desc' => __('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'redux-framework-demo'),
                    'default' => [
                        'sameall' => '0',
                        'padding-top' => '0px',
                        'padding-right' => '15px',
                        'padding-bottom' => '0px',
                        'padding-left' => '15px',
                        'units' => 'px',
                    ],
                    'select2' => ['allowClear' => false],
                ],
                [
                    'id' => 'footer_layout_rows',
                    'type' => 'select',
                    'title' => __('Rows', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'desc' => __('', THEME_DOMAIN),
                    'options' => [
                        '1' => 'One row',
                        '2' => 'Two rows',
                        '3' => 'Three rows'
                    ],
                    'default' => '1',
                    'select2' => ['allowClear' => false]
                ],
                
                /*** ROW 1 ***/
                [
                    'id' => 'footer_layout_section-rows-1-start',
                    'type' => 'section',
                    'title' => __('Row 1', THEME_DOMAIN),
                    'indent' => true ,
                ],
                [
                    'id' => 'footer_layout_rows-1-columns',
                    'type' => 'select',
                    'title' => __('Row 1 columns', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'desc' => __('', THEME_DOMAIN),
                    'options' => [
                        '12' => 'One column - 100% width',
                        '6' => 'Two columns - 50% / 50% width',
                        '4' => 'Three columns - 33.3% / 33.3% / 33.3% width',
                        '3' => 'Four columns - 25% / 25% / 25% / 25% width'
                    ],
                    'default' => '4',
                    'select2' => ['allowClear' => false]
                ],
                [
                    'id' => 'footer_layout_row-1-widgets-padding',
                    'type' => 'them_spacing',
                    'mode' => 'padding',
                    'units' => ['px', 'em'],
                    'units_extended' => true,
                    'title' => __('Widgets padding', THEME_DOMAIN),
                    'subtitle' => __('Allow your users to choose the spacing or margin they want.', 'redux-framework-demo'),
                    'desc' => __('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'redux-framework-demo'),
                    'default' => [
                        'sameall' => '1',
                        'padding-top' => '20px',
                        'padding-right' => '20px',
                        'padding-bottom' => '20px',
                        'padding-left' => '20px',
                        'units' => 'px',
                    ],
                    'select2' => ['allowClear' => false],
                ],
                [
                    'id'     => 'footer_layout_section-rows-1-end',
                    'type'   => 'section',
                    'indent' => false,
                ],
                
                /*** ROW 2 ***/
                [
                    'id' => 'footer_layout_section-rows-2-start',
                    'type' => 'section',
                    'title' => __('Row 2', THEME_DOMAIN),
                    'indent' => true ,
                    'required' => ['footer_layout_rows', '>', '1']
                ],
                [
                    'id' => 'footer_layout_rows-2-columns',
                    'type' => 'select',
                    'title' => __('Row 2 columns', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'desc' => __('', THEME_DOMAIN),
                    'options' => [
                        '12' => 'One column - 100% width',
                        '6' => 'Two columns - 50% / 50% width',
                        '4' => 'Three columns - 33.3% / 33.3% / 33.3% width',
                        '3' => 'Four columns - 25% / 25% / 25% / 25% width'
                    ],
                    'default' => '4',
                    'select2' => ['allowClear' => false],
                    'required' => ['footer_layout_rows', '>', '1']
                ],
                [
                    'id' => 'footer_layout_row-2-widgets-padding',
                    'type' => 'them_spacing',
                    'mode' => 'padding',
                    'units' => ['px', 'em'],
                    'units_extended' => true,
                    'title' => __('Widgets padding', THEME_DOMAIN),
                    'subtitle' => __('Allow your users to choose the spacing or margin they want.', 'redux-framework-demo'),
                    'desc' => __('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'redux-framework-demo'),
                    'default' => [
                        'sameall' => '1',
                        'padding-top' => '20px',
                        'padding-right' => '20px',
                        'padding-bottom' => '20px',
                        'padding-left' => '20px',
                        'units' => 'px',
                    ],
                    'select2' => ['allowClear' => false],
                    'required' => ['footer_layout_rows', '>', '1']
                ],
                [
                    'id'     => 'footer_layout_section-rows-2-end',
                    'type'   => 'section',
                    'indent' => false,
                    'required' => ['footer_layout_rows', '>', '1']
                ],
                
                /*** ROW 3 ***/
                [
                    'id' => 'footer_layout_section-rows-3-start',
                    'type' => 'section',
                    'title' => __('Row 3', THEME_DOMAIN),
                    'indent' => true ,
                    'required' => ['footer_layout_rows', '>', '2']
                ],
                [
                    'id' => 'footer_layout_rows-3-columns',
                    'type' => 'select',
                    'title' => __('Row 3 columns', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'desc' => __('', THEME_DOMAIN),
                    'options' => [
                        '12' => 'One column - 100% width',
                        '6' => 'Two columns - 50% / 50% width',
                        '4' => 'Three columns - 33.3% / 33.3% / 33.3% width',
                        '3' => 'Four columns - 25% / 25% / 25% / 25% width'
                    ],
                    'default' => '4',
                    'select2' => ['allowClear' => false],
                    'required' => ['footer_layout_rows', '>', '2']
                ],
                [
                    'id' => 'footer_layout_row-3-widgets-padding',
                    'type' => 'them_spacing',
                    'mode' => 'padding',
                    'units' => ['px', 'em'],
                    'units_extended' => true,
                    'title' => __('Widgets padding', THEME_DOMAIN),
                    'subtitle' => __('Allow your users to choose the spacing or margin they want.', 'redux-framework-demo'),
                    'desc' => __('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'redux-framework-demo'),
                    'default' => [
                        'sameall' => '1',
                        'padding-top' => '20px',
                        'padding-right' => '20px',
                        'padding-bottom' => '20px',
                        'padding-left' => '20px',
                        'units' => 'px',
                    ],
                    'select2' => ['allowClear' => false],
                    'required' => ['footer_layout_rows', '>', '2']
                ],
                [
                    'id'     => 'footer_layout_section-rows-3-end',
                    'type'   => 'section',
                    'indent' => false,
                    'required' => ['footer_layout_rows', '>', '2']
                ],
                
                [
                    'id' => 'footer_layout_rows-1-preview',
                    'type' => 'raw',
                    'title' => __('Preview', THEME_DOMAIN),
                    'subtitle' => __('Subtitle text goes here.', THEME_DOMAIN),
                    'desc' => __('This is the description field for additional info.', THEME_DOMAIN),
                    'content' => file_get_contents(THEME_DIR . '/inc/preview/footer/one-row.html'),
                    'required' => ['footer_layout_rows', '=', '1']
                ],
                [
                    'id' => 'footer_layout_rows-2-preview',
                    'type' => 'raw',
                    'title' => __('Preview', THEME_DOMAIN),
                    'subtitle' => __('Subtitle text goes here.', THEME_DOMAIN),
                    'desc' => __('This is the description field for additional info.', THEME_DOMAIN),
                    'content' => file_get_contents(THEME_DIR . '/inc/preview/footer/two-rows.html'),
                    'required' => ['footer_layout_rows', '=', '2']
                ],
                [
                    'id' => 'footer_layout_rows-3-preview',
                    'type' => 'raw',
                    'title' => __('Preview', THEME_DOMAIN),
                    'subtitle' => __('Subtitle text goes here.', THEME_DOMAIN),
                    'desc' => __('This is the description field for additional info.', THEME_DOMAIN),
                    'content' => file_get_contents(THEME_DIR . '/inc/preview/footer/three-rows.html'),
                    'required' => ['footer_layout_rows', '=', '3']
                ]
            ]
        ]);
        
    }

}
