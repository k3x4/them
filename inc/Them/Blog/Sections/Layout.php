<?php

namespace Them\Blog\Sections;

use Them\ISection;

class Layout implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Layout', THEME_DOMAIN),
            'desc' => __('Layout Settings', THEME_DOMAIN),
            'id' => 'blog_layout',
            'subsection' => true,
            'fields' => [
                [
                    'id' => 'blog_layout_post-view',
                    'type' => 'select',
                    'title' => __('Post view', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'desc' => __('', THEME_DOMAIN),
                    'options' => [
                        'content' => 'Full content',
                        'excerpt' => 'Excerpt',
                    ],
                    'default' => 'excerpt',
                    'select2' => ['allowClear' => false],
                ]
            ]
        ]);
        
    }

}
