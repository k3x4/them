<?php

namespace Them\Sections\Typography;

use Them\Sections\ISection;

class Headers implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Headers Typography', THEME_DOMAIN),
            'desc' => __('Headers Typography Settings', THEME_DOMAIN),
            'id' => 'typography_headers',
            'subsection' => true,
            'fields' => [
                [
                    'id' => 'typography_headers_post_titles',
                    'type' => 'typography',
                    'title' => __('Post Titles', THEME_DOMAIN),
                    'font-backup' => true,
                    'all_styles' => true,
                    'subtitle' => __('Controls the font size of post titles including archive and single posts. This is a H2 heading.', THEME_DOMAIN),
                    'default' => [
                        'color' => '#333',
                        'font-style' => '700',
                        'font-family' => 'Abel',
                        'google' => true,
                        'font-size' => '33px',
                        'line-height' => '40px'
                    ]
                ],
                [
                    'id' => 'typography_headers_h1',
                    'type' => 'typography',
                    'title' => __('H1 Headers', THEME_DOMAIN),
                    'font-backup' => true,
                    'all_styles' => true,
                    'subtitle' => __('These settings control the typography for all H1 Headers.', THEME_DOMAIN),
                    'default' => [
                        'color' => '#333',
                        'font-style' => '700',
                        'font-family' => 'Abel',
                        'google' => true,
                        'font-size' => '33px',
                        'line-height' => '40px'
                    ]
                ],
                [
                    'id' => 'typography_headers_h2',
                    'type' => 'typography',
                    'title' => __('H2 Headers', THEME_DOMAIN),
                    'font-backup' => true,
                    'all_styles' => true,
                    'subtitle' => __('These settings control the typography for all H2 Headers.', THEME_DOMAIN),
                    'default' => [
                        'color' => '#333',
                        'font-style' => '700',
                        'font-family' => 'Abel',
                        'google' => true,
                        'font-size' => '33px',
                        'line-height' => '40px'
                    ]
                ],
                [
                    'id' => 'typography_headers_h3',
                    'type' => 'typography',
                    'title' => __('H3 Headers', THEME_DOMAIN),
                    'font-backup' => true,
                    'all_styles' => true,
                    'subtitle' => __('These settings control the typography for all H3 Headers.', THEME_DOMAIN),
                    'default' => [
                        'color' => '#333',
                        'font-style' => '700',
                        'font-family' => 'Abel',
                        'google' => true,
                        'font-size' => '33px',
                        'line-height' => '40px'
                    ]
                ],
                [
                    'id' => 'typography_headers_h4',
                    'type' => 'typography',
                    'title' => __('H4 Headers', THEME_DOMAIN),
                    'font-backup' => true,
                    'all_styles' => true,
                    'subtitle' => __('These settings control the typography for all H4 Headers.', THEME_DOMAIN),
                    'default' => [
                        'color' => '#333',
                        'font-style' => '700',
                        'font-family' => 'Abel',
                        'google' => true,
                        'font-size' => '33px',
                        'line-height' => '40px'
                    ]
                ],
                [
                    'id' => 'typography_headers_h5',
                    'type' => 'typography',
                    'title' => __('H5 Headers', THEME_DOMAIN),
                    'font-backup' => true,
                    'all_styles' => true,
                    'subtitle' => __('These settings control the typography for all H5 Headers.', THEME_DOMAIN),
                    'default' => [
                        'color' => '#333',
                        'font-style' => '700',
                        'font-family' => 'Abel',
                        'google' => true,
                        'font-size' => '33px',
                        'line-height' => '40px'
                    ]
                ],
                [
                    'id' => 'typography_headers_h6',
                    'type' => 'typography',
                    'title' => __('H6 Headers', THEME_DOMAIN),
                    'font-backup' => true,
                    'all_styles' => true,
                    'subtitle' => __('These settings control the typography for all H6 Headers.', THEME_DOMAIN),
                    'default' => [
                        'color' => '#333',
                        'font-style' => '700',
                        'font-family' => 'Abel',
                        'google' => true,
                        'font-size' => '33px',
                        'line-height' => '40px'
                    ]
                ],
            ]
        ]);
        
    }

}
