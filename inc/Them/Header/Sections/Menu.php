<?php

namespace Them\Header\Sections;

use Them\ISection;
use Them\Helpers;

class Menu implements ISection {

    public static function addSection() {
        
        $registry = Helpers\Registry::getInstance();
        $patterns = $registry['patterns'];        

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Menu', THEME_DOMAIN),
            'desc' => __('Menu Settings', THEME_DOMAIN),
            'id' => 'header_menu',
            'subsection' => true,
            'fields' => [
                [
                    'id' => 'header_menu_padding',
                    'type' => 'them_spacing',
                    'mode' => 'padding',
                    'units' => ['px'],
                    'units_extended' => true,
                    'title' => __('Menu bar padding', THEME_DOMAIN),
                    'subtitle' => __('Allow your users to choose the spacing or margin they want.', 'redux-framework-demo'),
                    'desc' => __('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'redux-framework-demo'),
                    'default' => [
                        'sameall' => '1',
                        'padding-top' => '0px',
                        'padding-right' => '0px',
                        'padding-bottom' => '0px',
                        'padding-left' => '0px',
                        'units' => 'px',
                    ],
                    'select2' => ['allowClear' => false],
                    'required' => ['header_layout_orientation', '=', ORIENTATION_HORIZONTAL]
                ],
                [
                    'id' => 'header_menu_padding-items',
                    'type' => 'them_spacing',
                    'mode' => 'padding',
                    'units' => ['px'],
                    'units_extended' => true,
                    'title' => __('Menu items padding', THEME_DOMAIN),
                    'subtitle' => __('Allow your users to choose the spacing or margin they want.', 'redux-framework-demo'),
                    'desc' => __('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'redux-framework-demo'),
                    'default' => [
                        'sameall' => '0',
                        'padding-top' => '15px',
                        'padding-right' => '20px',
                        'padding-bottom' => '15px',
                        'padding-left' => '20px',
                        'units' => 'px',
                    ],
                    'select2' => ['allowClear' => false],
                ],
                [
                    'id' => 'header_menu_custom-height',
                    'type' => 'switch',
                    'title' => __('Custom menu height', THEME_DOMAIN),
                    'subtitle' => __('Look, it\'s on!', THEME_DOMAIN),
                    'default' => false,
                    'required' => ['header_layout_orientation', '=', ORIENTATION_HORIZONTAL]
                ],
                [
                    'id' => 'header_menu_orientation-h-height',
                    'type' => 'dimensions',
                    'width' => false,
                    'units' => ['px', 'em', '%'],
                    'title' => __('Dimensions (Width/Height) Option', THEME_DOMAIN),
                    'subtitle' => __('Allow your users to choose width, height, and/or unit.', THEME_DOMAIN),
                    'desc' => __('Enable or disable any piece of this field. Width, Height, or Units.', THEME_DOMAIN),
                    'default' => [
                        'height' => '80',
                    ],
                    'required' => ['header_menu_custom-height', '=', true]
                ],
                [
                    'id' => 'header_menu_custom-width',
                    'type' => 'switch',
                    'title' => __('Custom menu width', THEME_DOMAIN),
                    'subtitle' => __('Look, it\'s on!', THEME_DOMAIN),
                    'default' => false,
                    'required' => ['header_layout_orientation', '=', ORIENTATION_VERTICAL]
                ],
                [
                    'id' => 'header_menu_orientation-v-width',
                    'type' => 'dimensions',
                    'height' => false,
                    'units' => ['px', 'em', '%'],
                    'title' => __('Dimensions (Width/Height) Option', THEME_DOMAIN),
                    'subtitle' => __('Allow your users to choose width, height, and/or unit.', THEME_DOMAIN),
                    'desc' => __('Enable or disable any piece of this field. Width, Height, or Units.', THEME_DOMAIN),
                    'default' => [
                        'width' => '100',
                        'units' => '%'
                    ],
                    'required' => ['header_menu_custom-width', '=', true]
                ],
                
                /*** STYLING ***/
                [
                    'id' => 'header_menu_section-styling-start',
                    'type' => 'section',
                    'title' => __('Styling', THEME_DOMAIN),
                    'indent' => true 
                ],
                [
                    'id'       => 'header_menu_background-menu-type',
                    'type'     => 'button_set',
                    'title'    => __('Menu container background', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'options' => [
                        'color' => 'Color', 
                        'pattern' => 'Pattern', 
                        'image' => 'Custom Image'
                    ], 
                    'default' => 'color'
                ],
                [
                    'id' => 'header_menu_background-menu-color',
                    'type' => 'color_rgba',
                    'class' => 'them_button_set',
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
                    'required' => ['header_menu_background-menu-type', '=', 'color']
                ],
                [
                    'id' => 'header_menu_background-menu-pattern',
                    'type' => 'image_select',
                    'class' => 'them_patterns them_button_set',
                    'tiles' => true,
                    'options' => $patterns,
                    'default' => '01',
                    'required' => ['header_menu_background-menu-type', '=', 'pattern']
                ],
                [
                    'id'       => 'header_menu_background-menu-image',
                    'type'     => 'background',
                    'class' => 'them_button_set',
                    'subtitle' => __('Body background with image, color, etc.', THEME_DOMAIN),
                    'desc'     => __('This is the description field, again good for additional info.', THEME_DOMAIN),
                    'required' => ['header_menu_background-menu-type', '=', 'image']
                ],
                [
                    'id' => 'header_menu_menu-items-text-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Items text color', THEME_DOMAIN),
                    'subtitle' => __('Pick a main color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#222222',
                ],
                [
                    'id' => 'header_menu_menu-items-text-hover-color-enable',
                    'type' => 'switch',
                    'title' => __('Text color change on hover', THEME_DOMAIN),
                    'default' => false,
                ],
                [
                    'id' => 'header_menu_menu-items-text-hover-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Items text hover color', THEME_DOMAIN),
                    'subtitle' => __('Pick a main color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#3366CC',
                    'required' => ['header_menu_menu-items-text-hover-color-enable', '=', true]
                ],
                [
                    'id' => 'header_menu_menu-items-background-color',
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
                    'id' => 'header_menu_menu-items-background-hover-color-enable',
                    'type' => 'switch',
                    'title' => __('Background color change on hover', THEME_DOMAIN),
                    'default' => false,
                ],
                [
                    'id' => 'header_menu_menu-items-background-hover-color',
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
                    'required' => ['header_menu_menu-items-background-hover-color-enable', '=', true]
                ],
                [
                    'id' => 'header_menu_menu-subitems-text-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Subitems text color', THEME_DOMAIN),
                    'subtitle' => __('Pick a main color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#222222',
                ],
                [
                    'id' => 'header_menu_menu-subitems-text-hover-color-enable',
                    'type' => 'switch',
                    'title' => __('Text color change on hover', THEME_DOMAIN),
                    'default' => false,
                ],
                [
                    'id' => 'header_menu_menu-subitems-text-hover-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Subitems text hover color', THEME_DOMAIN),
                    'subtitle' => __('Pick a main color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#3366CC',
                    'required' => ['header_menu_menu-subitems-text-hover-color-enable', '=', true]
                ],
                [
                    'id' => 'header_menu_menu-subitems-background-color',
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
                    'id' => 'header_menu_menu-subitems-background-hover-color-enable',
                    'type' => 'switch',
                    'title' => __('Background color change on hover', THEME_DOMAIN),
                    'default' => false,
                ],
                [
                    'id' => 'header_menu_menu-subitems-background-hover-color',
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
                    'required' => ['header_menu_menu-subitems-background-hover-color-enable', '=', true]
                ],
                [
                    'id'     => 'header_menu_section-styling-end',
                    'type'   => 'section',
                    'indent' => false,
                ]
            ]
        ]);
        
    }

}
