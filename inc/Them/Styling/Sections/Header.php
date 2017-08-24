<?php

namespace Them\Styling\Sections;

use Them\ISection;

class Header implements ISection {

    public static function addSection() {  

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Header', THEME_DOMAIN),
            'desc' => __('Header Settings', THEME_DOMAIN),
            'id' => 'styling_header',
            'subsection' => true,
            'fields' => [
                [
                    'id' => 'styling_header_section-background-start',
                    'type' => 'section',
                    'title' => __('Background', THEME_DOMAIN),
                    'indent' => true 
                ],
                [
                    'id' => 'styling_header_background-header-color',
                    'type' => 'color_rgba',
                    'title' => 'Header Background Color',
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
                    'id' => 'styling_header_background-header-image',
                    'type' => 'media',
                    'title' => __('Header Background Image', THEME_DOMAIN),
                    'compiler' => 'true',
                    'subtitle' => __('Background Image For Main Content Area.++', THEME_DOMAIN),
                ],
                [
                    'id'     => 'styling_header_section-background-end',
                    'type'   => 'section',
                    'indent' => false,
                ],
                [
                    'id' => 'styling_header_section-menu-start',
                    'type' => 'section',
                    'title' => __('Menu', THEME_DOMAIN),
                    'indent' => true 
                ],
                [
                    'id' => 'styling_header_background-menu-color',
                    'type' => 'color_rgba',
                    'title' => 'Menu Background Color',
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
                    'id' => 'styling_header_background-menu-image',
                    'type' => 'media',
                    'title' => __('Menu Background Image', THEME_DOMAIN),
                    'compiler' => 'true',
                    'subtitle' => __('Background Image For Main Content Area.++', THEME_DOMAIN),
                ],
                [
                    'id' => 'styling_header_menu-items-text-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Items text color', THEME_DOMAIN),
                    'subtitle' => __('Pick a main color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#222222',
                ],
                [
                    'id' => 'styling_header_menu-items-text-hover-color-enable',
                    'type' => 'switch',
                    'title' => __('Text color change on hover', THEME_DOMAIN),
                    'default' => false,
                ],
                [
                    'id' => 'styling_header_menu-items-text-hover-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Items text hover color', THEME_DOMAIN),
                    'subtitle' => __('Pick a main color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#3366CC',
                    'required' => ['styling_header_menu-items-text-hover-color-enable', '=', true]
                ],
                [
                    'id' => 'styling_header_menu-items-background-color',
                    'type' => 'color_rgba',
                    'title' => 'Items background color',
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
                    ]
                ],
                [
                    'id' => 'styling_header_menu-items-background-hover-color-enable',
                    'type' => 'switch',
                    'title' => __('Background color change on hover', THEME_DOMAIN),
                    'default' => false,
                ],
                [
                    'id' => 'styling_header_menu-items-background-hover-color',
                    'type' => 'color_rgba',
                    'title' => 'Items background hover color',
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
                    'required' => ['styling_header_menu-items-background-hover-color-enable', '=', true]
                ],
                [
                    'id' => 'styling_header_menu-subitems-text-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Subitems text color', THEME_DOMAIN),
                    'subtitle' => __('Pick a main color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#222222',
                ],
                [
                    'id' => 'styling_header_menu-subitems-text-hover-color-enable',
                    'type' => 'switch',
                    'title' => __('Text color change on hover', THEME_DOMAIN),
                    'default' => false,
                ],
                [
                    'id' => 'styling_header_menu-subitems-text-hover-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Subitems text hover color', THEME_DOMAIN),
                    'subtitle' => __('Pick a main color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#3366CC',
                    'required' => ['styling_header_menu-subitems-text-hover-color-enable', '=', true]
                ],
                [
                    'id' => 'styling_header_menu-subitems-background-color',
                    'type' => 'color_rgba',
                    'title' => 'Subitems background color',
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
                    'id' => 'styling_header_menu-subitems-background-hover-color-enable',
                    'type' => 'switch',
                    'title' => __('Text color change on hover', THEME_DOMAIN),
                    'default' => false,
                ],
                [
                    'id' => 'styling_header_menu-subitems-background-hover-color',
                    'type' => 'color_rgba',
                    'title' => 'Subitems background hover color',
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
                    'required' => ['styling_header_menu-subitems-background-hover-color-enable', '=', true]
                ],
                [
                    'id'     => 'styling_header_section-menu-end',
                    'type'   => 'section',
                    'indent' => false,
                ]
            ]
        ]);
        
    }

}
