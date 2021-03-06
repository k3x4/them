<?php

namespace Them\Sidebars\Sections;

use Them\ISection;

class Layout implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Layout', THEME_DOMAIN),
            'desc' => __('Layout Settings', THEME_DOMAIN),
            'id' => 'sidebars_layout',
            'subsection' => true,
            'fields' => [
                [
                    'id' => 'sidebars_layout_scheme',
                    'type' => 'image_select',
                    'title' => __('Main Layout', THEME_DOMAIN),
                    'subtitle' => __('Select main content and sidebar alignment. Choose between 1, 2 or 3 column layout.', 'redux-framework-demo'),
                    'options' => [
                        SCHEME_CONTENT => [
                            'alt' => '1 Column',
                            'img' => \ReduxFramework::$_url . 'assets/img/1col.png'
                        ],
                        SCHEME_SIDEBAR_CONTENT => [
                            'alt' => '2 Column Left',
                            'img' => \ReduxFramework::$_url . 'assets/img/2cl.png'
                        ],
                        SCHEME_CONTENT_SIDEBAR => [
                            'alt' => '2 Column Right',
                            'img' => \ReduxFramework::$_url . 'assets/img/2cr.png'
                        ],
                        SCHEME_SIDEBAR_CONTENT_SIDEBAR => [
                            'alt' => '3 Column Middle',
                            'img' => \ReduxFramework::$_url . 'assets/img/3cm.png'
                        ],
                        SCHEME_SIDEBAR_SIDEBAR_CONTENT => [
                            'alt' => '3 Column Left',
                            'img' => \ReduxFramework::$_url . 'assets/img/3cl.png'
                        ],
                        SCHEME_CONTENT_SIDEBAR_SIDEBAR => [
                            'alt' => '3 Column Right',
                            'img' => \ReduxFramework::$_url . 'assets/img/3cr.png'
                        ]
                    ],
                    'default' => SCHEME_CONTENT_SIDEBAR
                ],
                
                /*** SIDEBAR 1 ***/
                [
                    'id' => 'sidebars_layout_section-sidebar-1-start',
                    'type' => 'section',
                    'title' => __('Sidebar 1', THEME_DOMAIN),
                    'indent' => true ,
                    'required' => ['sidebars_layout_scheme', 'not_contain', '0-']
                ],
                [
                    'id' => 'sidebars_layout_count-1-sidebar-1-width',
                    'type' => 'select',
                    'title' => __('Sidebar width', THEME_DOMAIN),
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
                    'required' => ['sidebars_layout_scheme', 'contains', '1-']
                ],
                [
                    'id' => 'sidebars_layout_count-2-sidebar-1-width',
                    'type' => 'select',
                    'title' => __('Sidebar 1 width', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'desc' => __('', THEME_DOMAIN),
                    'options' => [
                        '1' => '8.33%',
                        '2' => '16.66%',
                        '3' => '25%',
                        '4' => '33.33%',
                        '5' => '41.66%'
                    ],
                    'default' => '3',
                    'select2' => ['allowClear' => false],
                    'required' => ['sidebars_layout_scheme', 'contains', '2-']
                ],
                                [
                    'id' => 'sidebars_layout_sidebar-1-wrapper-padding',
                    'type' => 'them_spacing',
                    'mode' => 'padding',
                    'units' => ['px', 'em'],
                    'units_extended' => true,
                    'title' => __('Sidebar 1 wrapper padding', THEME_DOMAIN),
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
                    'required' => ['sidebars_layout_scheme', 'not_contain', '0-']
                ],
                [
                    'id' => 'sidebars_layout_sidebar-1-main-padding',
                    'type' => 'them_spacing',
                    'mode' => 'padding',
                    'units' => ['px', 'em'],
                    'units_extended' => true,
                    'title' => __('Sidebar 1 main block padding', THEME_DOMAIN),
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
                    'required' => ['sidebars_layout_scheme', 'not_contain', '0-']
                ],
                [
                    'id'     => 'sidebars_layout_section-sidebar-1-end',
                    'type'   => 'section',
                    'indent' => false,
                    'required' => ['sidebars_layout_scheme', 'not_contain', '0-']
                ],
                
                /*** SIDEBAR 2 ***/
                [
                    'id' => 'sidebars_layout_section-sidebar-2-start',
                    'type' => 'section',
                    'title' => __('Sidebar 2', THEME_DOMAIN),
                    'indent' => true ,
                    'required' => ['sidebars_layout_scheme', 'contains', '2-']
                ],
                [
                    'id' => 'sidebars_layout_count-2-sidebar-2-width',
                    'type' => 'select',
                    'title' => __('Sidebar 2 width', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'desc' => __('', THEME_DOMAIN),
                    'options' => [
                        '1' => '8.33%',
                        '2' => '16.66%',
                        '3' => '25%',
                        '4' => '33.33%',
                        '5' => '41.66%'
                    ],
                    'default' => '3',
                    'select2' => ['allowClear' => false],
                    'required' => ['sidebars_layout_scheme', 'contains', '2-']
                ],
                [
                    'id' => 'sidebars_layout_sidebar-2-wrapper-padding',
                    'type' => 'them_spacing',
                    'mode' => 'padding',
                    'units' => ['px', 'em'],
                    'units_extended' => true,
                    'title' => __('Sidebar 2 wrapper padding', THEME_DOMAIN),
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
                    'required' => ['sidebars_layout_scheme', 'contains', '2-']
                ],
                [
                    'id' => 'sidebars_layout_sidebar-2-main-padding',
                    'type' => 'them_spacing',
                    'mode' => 'padding',
                    'units' => ['px', 'em'],
                    'units_extended' => true,
                    'title' => __('Sidebar 2 main block padding', THEME_DOMAIN),
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
                    'required' => ['sidebars_layout_scheme', 'contains', '2-']
                ],
                [
                    'id'     => 'sidebars_layout_section-sidebar-2-end',
                    'type'   => 'section',
                    'indent' => false,
                    'required' => ['sidebars_layout_scheme', 'contains', '2-']
                ],

                /*** CONTENT ***/
                [
                    'id' => 'sidebars_layout_section-content-start',
                    'type' => 'section',
                    'title' => __('Content', THEME_DOMAIN),
                    'indent' => true
                ],
                [
                    'id' => 'sidebars_layout_count-1-content-width',
                    'type' => 'select',
                    'title' => __('Content width', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'desc' => __('', THEME_DOMAIN),
                    'options' => [
                        '6' => '50%',
                        '7' => '58.33%',
                        '8' => '66.66%',
                        '9' => '75%',
                        '10' => '83.33%',
                        '11' => '91.66%',
                    ],
                    'default' => '9',
                    'select2' => ['allowClear' => false],
                    'required' => ['sidebars_layout_scheme', 'contains', '1-']
                ],
                [
                    'id' => 'sidebars_layout_count-2-content-width',
                    'type' => 'select',
                    'title' => __('Content width', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'desc' => __('', THEME_DOMAIN),
                    'options' => [
                        '6' => '50%',
                        '7' => '58.33%',
                        '8' => '66.66%',
                        '9' => '75%',
                        '10' => '83.33%'
                    ],
                    'default' => '6',
                    'select2' => ['allowClear' => false],
                    'required' => ['sidebars_layout_scheme', 'contains', '2-']
                ],
                [
                    'id' => 'sidebars_layout_content-wrapper-padding',
                    'type' => 'them_spacing',
                    'mode' => 'padding',
                    'units' => ['px', 'em'],
                    'units_extended' => true,
                    'title' => __('Wrapper content padding', THEME_DOMAIN),
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
                    'id' => 'sidebars_layout_content-main-padding',
                    'type' => 'them_spacing',
                    'mode' => 'padding',
                    'units' => ['px', 'em'],
                    'units_extended' => true,
                    'title' => __('Main content block padding', THEME_DOMAIN),
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
                    'id'     => 'sidebars_layout_section-content-end',
                    'type'   => 'section',
                    'indent' => false
                ],
                
                /*** PREVIEW ***/
                [
                    'id' => 'sidebars_layout_count-0-preview',
                    'type' => 'raw',
                    'title' => __('Preview', THEME_DOMAIN),
                    'subtitle' => __('Subtitle text goes here.', THEME_DOMAIN),
                    'desc' => __('This is the description field for additional info.', THEME_DOMAIN),
                    'content' => file_get_contents(THEME_DIR . '/inc/preview/sidebars/nosidebar.html'),
                    'required' => ['sidebars_layout_scheme', '=', SCHEME_CONTENT]
                ],
                [
                    'id' => 'sidebars_layout_count-1-preview-left',
                    'type' => 'raw',
                    'title' => __('Preview', THEME_DOMAIN),
                    'subtitle' => __('Subtitle text goes here.', THEME_DOMAIN),
                    'desc' => __('This is the description field for additional info.', THEME_DOMAIN),
                    'content' => file_get_contents(THEME_DIR . '/inc/preview/sidebars/side-content.html'),
                    'required' => ['sidebars_layout_scheme', '=', SCHEME_SIDEBAR_CONTENT]
                ],
                [
                    'id' => 'sidebars_layout_count-1-preview-right',
                    'type' => 'raw',
                    'title' => __('Preview', THEME_DOMAIN),
                    'subtitle' => __('Subtitle text goes here.', THEME_DOMAIN),
                    'desc' => __('This is the description field for additional info.', THEME_DOMAIN),
                    'content' => file_get_contents(THEME_DIR . '/inc/preview/sidebars/content-side.html'),
                    'required' => ['sidebars_layout_scheme', '=', SCHEME_CONTENT_SIDEBAR]
                ],
                [
                    'id' => 'sidebars_layout_count-2-preview-left-right',
                    'type' => 'raw',
                    'title' => __('Preview', THEME_DOMAIN),
                    'subtitle' => __('Subtitle text goes here.', THEME_DOMAIN),
                    'desc' => __('This is the description field for additional info.', THEME_DOMAIN),
                    'content' => file_get_contents(THEME_DIR . '/inc/preview/sidebars/side-content-side.html'),
                    'required' => ['sidebars_layout_scheme', '=', SCHEME_SIDEBAR_CONTENT_SIDEBAR]
                ],
                [
                    'id' => 'sidebars_layout_count-2-preview-left-left',
                    'type' => 'raw',
                    'title' => __('Preview', THEME_DOMAIN),
                    'subtitle' => __('Subtitle text goes here.', THEME_DOMAIN),
                    'desc' => __('This is the description field for additional info.', THEME_DOMAIN),
                    'content' => file_get_contents(THEME_DIR . '/inc/preview/sidebars/side-side-content.html'),
                    'required' => ['sidebars_layout_scheme', '=', SCHEME_SIDEBAR_SIDEBAR_CONTENT]
                ],
                [
                    'id' => 'sidebars_layout_count-2-preview-right-right',
                    'type' => 'raw',
                    'title' => __('Preview', THEME_DOMAIN),
                    'subtitle' => __('Subtitle text goes here.', THEME_DOMAIN),
                    'desc' => __('This is the description field for additional info.', THEME_DOMAIN),
                    'content' => file_get_contents(THEME_DIR . '/inc/preview/sidebars/content-side-side.html'),
                    'required' => ['sidebars_layout_scheme', '=', SCHEME_CONTENT_SIDEBAR_SIDEBAR]
                ]
            ]
        ]);
        
    }

}
