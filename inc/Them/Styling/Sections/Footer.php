<?php

namespace Them\Styling\Sections;

use Them\ISection;

class Footer implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Footer', THEME_DOMAIN),
            'desc' => __('Footer Settings', THEME_DOMAIN),
            'id' => 'styling_footer',
            'subsection' => true,
            'fields' => [
                [
                    'id' => 'styling_footer_section-background-start',
                    'type' => 'section',
                    'title' => __('Background', THEME_DOMAIN),
                    'indent' => true 
                ],
                [
                    'id' => 'styling_footer_background-footer-color',
                    'type' => 'color_rgba',
                    'title' => 'Footer Background Color',
                    'subtitle' => 'Set color and alpha channel',
                    'desc' => 'The caption of this button may be changed to whatever you like!',
                    'default' => [
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
                    'id' => 'styling_footer_background-footer-image',
                    'type' => 'media',
                    'title' => __('Footer Background Image', THEME_DOMAIN),
                    'compiler' => 'true',
                ],
                [
                    'id'     => 'styling_footer_section-background-end',
                    'type'   => 'section',
                    'indent' => false,
                ],
                [
                    'id' => 'styling_footer_section-container-start',
                    'type' => 'section',
                    'title' => __('Container', THEME_DOMAIN),
                    'indent' => true 
                ],
                [
                    'id' => 'styling_footer_background-container-color',
                    'type' => 'color_rgba',
                    'title' => 'Container Background Color',
                    'subtitle' => 'Set color and alpha channel',
                    'desc' => 'The caption of this button may be changed to whatever you like!',
                    'default' => [
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
                    'id' => 'styling_footer_background-container-image',
                    'type' => 'media',
                    'title' => __('Container Background Image', THEME_DOMAIN),
                    'compiler' => 'true',
                    'subtitle' => __('Background Image For Main Content Area.++', THEME_DOMAIN),
                ],
                [
                    'id'     => 'styling_footer_section-container-end',
                    'type'   => 'section',
                    'indent' => false,
                ],
                [
                    'id' => 'styling_footer_section-widgets-start',
                    'type' => 'section',
                    'title' => __('Widgets', THEME_DOMAIN),
                    'indent' => true 
                ],
                [
                    'id' => 'styling_footer_background-widgets-color',
                    'type' => 'color_rgba',
                    'title' => 'Widgets Background Color',
                    'subtitle' => 'Set color and alpha channel',
                    'desc' => 'The caption of this button may be changed to whatever you like!',
                    'default' => [
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
                    'id' => 'styling_footer_background-widgets-image',
                    'type' => 'media',
                    'title' => __('Widgets Background Image', THEME_DOMAIN),
                    'compiler' => 'true',
                    'subtitle' => __('Background Image For Main Content Area.++', THEME_DOMAIN),
                ],
                [
                    'id' => 'styling_footer_widgets-text-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Text color', THEME_DOMAIN),
                    'subtitle' => __('Pick a main color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#222222',
                ],
                [
                    'id' => 'styling_footer_widgets-links-text-override-color-enable',
                    'type' => 'switch',
                    'title' => __('Override default links text color', THEME_DOMAIN),
                    'default' => false,
                ],
                [
                    'id' => 'styling_footer_widgets-links-text-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Links text color', THEME_DOMAIN),
                    'subtitle' => __('Pick a main color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#222222',
                    'required' => ['styling_footer_widgets-links-text-override-color-enable', '=', true]
                ],
                [
                    'id' => 'styling_footer_widgets-links-text-hover-color-enable',
                    'type' => 'switch',
                    'title' => __('Links text color change on hover', THEME_DOMAIN),
                    'default' => false,
                    'required' => ['styling_footer_widgets-links-text-override-color-enable', '=', true]
                ],
                [
                    'id' => 'styling_footer_widgets-links-text-hover-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Links text hover color', THEME_DOMAIN),
                    'subtitle' => __('Pick a main color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#3366CC',
                    'required' => [
                        ['styling_footer_widgets-links-text-override-color-enable', '=', true],
                        ['styling_footer_widgets-links-text-hover-color-enable', '=', true]
                    ]
                ],
                [
                    'id'     => 'styling_footer_section-widgets-end',
                    'type'   => 'section',
                    'indent' => false,
                ]
            ]
        ]);
        
    }

}
