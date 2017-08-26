<?php

namespace Them\Styling\Sections;

use Them\ISection;
use Them\Helpers;

class Header implements ISection {

    public static function addSection() {  
        
        $registry = Helpers\Registry::getInstance();
        $patterns = $registry['patterns'];

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
                    'id'       => 'styling_header_background-header-type',
                    'type'     => 'button_set',
                    'title'    => __('Background type', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    //'desc'     => __('This is the description field, again good for additional info.', THEME_DOMAIN),
                    'options' => [
                        'color' => 'Color', 
                        'pattern' => 'Pattern', 
                        'image' => 'Custom Image'
                    ], 
                    'default' => 'color'
                ],
                [
                    'id' => 'styling_header_background-header-color',
                    'type' => 'color_rgba',
                    //'title' => 'Header Background Color',
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
                    'required' => ['styling_header_background-header-type', '=', 'color']
                ],
                [
                    'id' => 'styling_header_background-header-pattern',
                    'type' => 'image_select',
                    'class' => 'them_patterns',
                    'tiles' => true,
                    'options' => $patterns,
                    'default' => '01',
                    'required' => ['styling_header_background-header-type', '=', 'pattern']
                ],
                [
                    'id'       => 'styling_header_background-header-image',
                    'type'     => 'background',
                    //'title'    => __('Body Background', THEME_DOMAIN),
                    'subtitle' => __('Body background with image, color, etc.', THEME_DOMAIN),
                    'desc'     => __('This is the description field, again good for additional info.', THEME_DOMAIN),
                    'required' => ['styling_header_background-header-type', '=', 'image']
                ],
                
                /*
                [
                    'id' => 'styling_header_background-header-color',
                    'type' => 'color_rgba',
                    'title' => 'Header Background Color',
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
                    'id' => 'styling_header_background-header-image',
                    'type' => 'media',
                    'title' => __('Header Background Image', THEME_DOMAIN),
                    'compiler' => 'true',
                    'subtitle' => __('Background Image For Main Content Area.++', THEME_DOMAIN),
                ],
                 * 
                 */
                [
                    'id'     => 'styling_header_section-background-end',
                    'type'   => 'section',
                    'indent' => false,
                ],
                [
                    'id' => 'styling_header_section-container-start',
                    'type' => 'section',
                    'title' => __('Container', THEME_DOMAIN),
                    'indent' => true 
                ],
                [
                    'id' => 'styling_header_background-container-color',
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
                    'id' => 'styling_header_background-container-image',
                    'type' => 'media',
                    'title' => __('Container Background Image', THEME_DOMAIN),
                    'compiler' => 'true',
                    'subtitle' => __('Background Image For Main Content Area.++', THEME_DOMAIN),
                ],
                [
                    'id'     => 'styling_header_section-container-end',
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
                    'title' => __('Background color change on hover', THEME_DOMAIN),
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
