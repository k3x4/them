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
                        '0-false-false' => [
                            'alt' => '1 Column',
                            'img' => \ReduxFramework::$_url . 'assets/img/1col.png'
                        ],
                        '1-left-false' => [
                            'alt' => '2 Column Left',
                            'img' => \ReduxFramework::$_url . 'assets/img/2cl.png'
                        ],
                        '1-right-false' => [
                            'alt' => '2 Column Right',
                            'img' => \ReduxFramework::$_url . 'assets/img/2cr.png'
                        ],
                        '2-left-right' => [
                            'alt' => '3 Column Middle',
                            'img' => \ReduxFramework::$_url . 'assets/img/3cm.png'
                        ],
                        '2-left-left' => [
                            'alt' => '3 Column Left',
                            'img' => \ReduxFramework::$_url . 'assets/img/3cl.png'
                        ],
                        '2-right-right' => [
                            'alt' => '3 Column Right',
                            'img' => \ReduxFramework::$_url . 'assets/img/3cr.png'
                        ]
                    ],
                    'default' => '1-right-false'
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
                    'id' => 'sidebars_layout_count-2-content-width',
                    'type' => 'select',
                    'title' => __('Content width', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'desc' => __('', THEME_DOMAIN),
                    // Must provide key => value pairs for select options
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
                    'id' => 'sidebars_layout_count-0-preview',
                    'type' => 'raw',
                    'title' => __('Preview', THEME_DOMAIN),
                    'subtitle' => __('Subtitle text goes here.', THEME_DOMAIN),
                    'desc' => __('This is the description field for additional info.', THEME_DOMAIN),
                    'content' => file_get_contents(THEME_DIR . '/inc/preview/sidebars/nosidebar.html'),
                    'required' => ['sidebars_layout_scheme', '=', '0-false-false']
                ],
                [
                    'id' => 'sidebars_layout_count-1-preview-left',
                    'type' => 'raw',
                    'title' => __('Preview', THEME_DOMAIN),
                    'subtitle' => __('Subtitle text goes here.', THEME_DOMAIN),
                    'desc' => __('This is the description field for additional info.', THEME_DOMAIN),
                    'content' => file_get_contents(THEME_DIR . '/inc/preview/sidebars/side-content.html'),
                    'required' => ['sidebars_layout_scheme', '=', '1-left-false']
                ],
                [
                    'id' => 'sidebars_layout_count-1-preview-right',
                    'type' => 'raw',
                    'title' => __('Preview', THEME_DOMAIN),
                    'subtitle' => __('Subtitle text goes here.', THEME_DOMAIN),
                    'desc' => __('This is the description field for additional info.', THEME_DOMAIN),
                    'content' => file_get_contents(THEME_DIR . '/inc/preview/sidebars/content-side.html'),
                    'required' => ['sidebars_layout_scheme', '=', '1-right-false']
                ],
                [
                    'id' => 'sidebars_layout_count-2-preview-left-right',
                    'type' => 'raw',
                    'title' => __('Preview', THEME_DOMAIN),
                    'subtitle' => __('Subtitle text goes here.', THEME_DOMAIN),
                    'desc' => __('This is the description field for additional info.', THEME_DOMAIN),
                    'content' => file_get_contents(THEME_DIR . '/inc/preview/sidebars/side-content-side.html'),
                    'required' => ['sidebars_layout_scheme', '=', '2-left-right']
                ],
                [
                    'id' => 'sidebars_layout_count-2-preview-left-left',
                    'type' => 'raw',
                    'title' => __('Preview', THEME_DOMAIN),
                    'subtitle' => __('Subtitle text goes here.', THEME_DOMAIN),
                    'desc' => __('This is the description field for additional info.', THEME_DOMAIN),
                    'content' => file_get_contents(THEME_DIR . '/inc/preview/sidebars/side-side-content.html'),
                    'required' => ['sidebars_layout_scheme', '=', '2-left-left']
                ],
                [
                    'id' => 'sidebars_layout_count-2-preview-right-right',
                    'type' => 'raw',
                    'title' => __('Preview', THEME_DOMAIN),
                    'subtitle' => __('Subtitle text goes here.', THEME_DOMAIN),
                    'desc' => __('This is the description field for additional info.', THEME_DOMAIN),
                    'content' => file_get_contents(THEME_DIR . '/inc/preview/sidebars/content-side-side.html'),
                    'required' => ['sidebars_layout_scheme', '=', '2-right-right']
                ]
            ]
        ]);
        
    }

}
