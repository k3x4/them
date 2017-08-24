<?php

namespace Them\Styling\Sections;

use Them\ISection;

class Content implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Content', THEME_DOMAIN),
            'desc' => __('Content Settings', THEME_DOMAIN),
            'id' => 'styling_content',
            'subsection' => true,
            'fields' => [
                [
                    'id' => 'styling_content_background-color',
                    'type' => 'color_rgba',
                    'title' => 'Page Background Color',
                    'subtitle' => 'Set color and alpha channel',
                    'desc' => 'The caption of this button may be changed to whatever you like!',
                    'default' => [
                        'color' => '#FFFFFF',
                        'alpha' => 1
                    ],
                    'options' => [
                        'show_input' => true,
                        'show_initial' => true,
                        'show_alpha' => true,
                        'show_palette' => true,
                        'show_palette_only' => false,
                        'show_selection_palette' => true,
                        'max_palette_size' => 10,
                        'allow_empty' => true,
                        'clickout_fires_change' => false,
                        'choose_text' => 'Choose',
                        'cancel_text' => 'Cancel',
                        'show_buttons' => true,
                        'use_extended_classes' => true,
                        'palette' => null, // show default
                        'input_text' => 'Select Color'
                    ],
                ],
                [
                    'id' => 'styling_content_background-image',
                    'type' => 'media',
                    //'url' => true,
                    'title' => __('Page Background Image', THEME_DOMAIN),
                    'compiler' => 'true',
                    'subtitle' => __('Background Image For Main Content Area.++', THEME_DOMAIN),
                    //'default' => ['url' => 'http://s.wordpress.org/style/images/codeispoetry.png'],
                ]
            ]
        ]);
        
    }

}
