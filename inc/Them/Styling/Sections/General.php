<?php

namespace Them\Styling\Sections;

use Them\ISection;

class General implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('General', THEME_DOMAIN),
            'desc' => __('General Settings', THEME_DOMAIN),
            'id' => 'styling_general',
            'subsection' => true,
            'fields' => [
                [
                    'id' => 'styling_general_body-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Body text color', THEME_DOMAIN),
                    'subtitle' => __('Pick a main color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#585858',
                ],
                [
                    'id' => 'styling_general_primary-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Primary color', THEME_DOMAIN),
                    'subtitle' => __('Pick a main color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#336699',
                ],
                [
                    'id' => 'styling_general_secondary-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Secondary color', THEME_DOMAIN),
                    'subtitle' => __('Pick a secondary color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#888888',
                ],
                [
                    'id' => 'styling_general_link-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Link color', THEME_DOMAIN),
                    'subtitle' => __('Pick a link color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#336699',
                ],
                [
                    'id' => 'styling_general_link-hover-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Link hover color', THEME_DOMAIN),
                    'subtitle' => __('Pick a main color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#3366CC',
                ],
                [
                    'id' => 'styling_general_page-background-color',
                    'type' => 'color_rgba',
                    'title' => 'Page Background Color',
                    'subtitle' => 'Set color and alpha channel',
                    'desc' => 'The caption of this button may be changed to whatever you like!',
                    'default' => [
                        'color' => '#f3f3f3',
                        'alpha' => '1'
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
                        'palette' => null, 
                        'input_text' => 'Select Color'
                    ],
                ],
                [
                    'id' => 'styling_general_page-background-image',
                    'type' => 'media',
                    'title' => __('Page Background Image', THEME_DOMAIN),
                    'compiler' => 'true',
                    'subtitle' => __('Background Image For Main Content Area.++', THEME_DOMAIN),
                ]
            ]
        ]);
        
    }

}
