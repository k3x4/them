<?php

namespace Them\Footer\Sections;

use Them\ISection;
use Them\Helpers;

class Styling implements ISection {

    public static function addSection() {
        
        $registry = Helpers\Registry::getInstance();
        $patterns = $registry['patterns'];        

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Styling', THEME_DOMAIN),
            'desc' => __('Styling Settings', THEME_DOMAIN),
            'id' => 'footer_styling',
            'subsection' => true,
            'fields' => [
                
                /*** BACKGROUND ***/
                [
                    'id' => 'footer_styling_section-background-start',
                    'type' => 'section',
                    'title' => __('Background', THEME_DOMAIN),
                    'indent' => true 
                ],
                [
                    'id'       => 'footer_styling_background-footer-type',
                    'type'     => 'button_set',
                    'title'    => __('Background type', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'options' => [
                        'color' => 'Color', 
                        'pattern' => 'Pattern', 
                        'image' => 'Custom Image'
                    ], 
                    'default' => 'color'
                ],
                [
                    'id' => 'footer_styling_background-footer-color',
                    'type' => 'color_rgba',
                    'subtitle' => 'Set color and alpha channel',
                    'desc' => 'The caption of this button may be changed to whatever you like!',
                    'class' => 'them_button_set',
                    'default' => [
                        'color' => '#434343',
                        'alpha' => 0
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
                    'required' => ['footer_styling_background-footer-type', '=', 'color']
                ],
                [
                    'id' => 'footer_styling_background-footer-pattern',
                    'type' => 'image_select',
                    'class' => 'them_patterns them_button_set',
                    'tiles' => true,
                    'options' => $patterns,
                    'default' => '01',
                    'required' => ['footer_styling_background-footer-type', '=', 'pattern']
                ],
                [
                    'id'       => 'footer_styling_background-footer-image',
                    'type'     => 'background',
                    'subtitle' => __('Body background with image, color, etc.', THEME_DOMAIN),
                    'class' => 'them_button_set',
                    'desc'     => __('This is the description field, again good for additional info.', THEME_DOMAIN),
                    'required' => ['footer_styling_background-footer-type', '=', 'image']
                ],
                [
                    'id'     => 'footer_styling_section-background-end',
                    'type'   => 'section',
                    'indent' => false,
                ],
                
                /*** CONTAINER ***/
                [
                    'id' => 'footer_styling_section-container-start',
                    'type' => 'section',
                    'title' => __('Container', THEME_DOMAIN),
                    'indent' => true 
                ],
                [
                    'id'       => 'footer_styling_background-container-type',
                    'type'     => 'button_set',
                    'title'    => __('Background type', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'options' => [
                        'color' => 'Color', 
                        'pattern' => 'Pattern', 
                        'image' => 'Custom Image'
                    ], 
                    'default' => 'color'
                ],
                [
                    'id' => 'footer_styling_background-container-color',
                    'type' => 'color_rgba',
                    'subtitle' => 'Set color and alpha channel',
                    'desc' => 'The caption of this button may be changed to whatever you like!',
                    'class' => 'them_button_set',
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
                    'required' => ['footer_styling_background-container-type', '=', 'color']
                ],
                [
                    'id' => 'footer_styling_background-container-pattern',
                    'type' => 'image_select',
                    'class' => 'them_patterns them_button_set',
                    'tiles' => true,
                    'options' => $patterns,
                    'default' => '01',
                    'required' => ['footer_styling_background-container-type', '=', 'pattern']
                ],
                [
                    'id'       => 'footer_styling_background-container-image',
                    'type'     => 'background',
                    'subtitle' => __('Body background with image, color, etc.', THEME_DOMAIN),
                    'class' => 'them_button_set',
                    'desc'     => __('This is the description field, again good for additional info.', THEME_DOMAIN),
                    'required' => ['footer_styling_background-container-type', '=', 'image']
                ],
                [
                    'id'     => 'footer_styling_section-container-end',
                    'type'   => 'section',
                    'indent' => false,
                ],
                
                /*** WIDGETS ***/
                [
                    'id' => 'footer_styling_section-widgets-start',
                    'type' => 'section',
                    'title' => __('Widgets', THEME_DOMAIN),
                    'indent' => true 
                ],
                [
                    'id'       => 'footer_styling_background-widgets-type',
                    'type'     => 'button_set',
                    'title'    => __('Background type', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'options' => [
                        'color' => 'Color', 
                        'pattern' => 'Pattern', 
                        'image' => 'Custom Image'
                    ], 
                    'default' => 'color'
                ],
                [
                    'id' => 'footer_styling_background-widgets-color',
                    'type' => 'color_rgba',
                    'subtitle' => 'Set color and alpha channel',
                    'desc' => 'The caption of this button may be changed to whatever you like!',
                    'class' => 'them_button_set',
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
                    'required' => ['footer_styling_background-widgets-type', '=', 'color']
                ],
                [
                    'id' => 'footer_styling_background-widgets-pattern',
                    'type' => 'image_select',
                    'class' => 'them_patterns them_button_set',
                    'tiles' => true,
                    'options' => $patterns,
                    'default' => '01',
                    'required' => ['footer_styling_background-widgets-type', '=', 'pattern']
                ],
                [
                    'id'       => 'footer_styling_background-widgets-image',
                    'type'     => 'background',
                    'subtitle' => __('Body background with image, color, etc.', THEME_DOMAIN),
                    'class' => 'them_button_set',
                    'desc'     => __('This is the description field, again good for additional info.', THEME_DOMAIN),
                    'required' => ['footer_styling_background-widgets-type', '=', 'image']
                ],
                [
                    'id' => 'footer_styling_widgets-text-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Text color', THEME_DOMAIN),
                    'subtitle' => __('Pick a main color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#aaaaaa',
                ],
                [
                    'id' => 'footer_styling_widgets-links-text-override-color-enable',
                    'type' => 'switch',
                    'title' => __('Override default links text color', THEME_DOMAIN),
                    'default' => false,
                ],
                [
                    'id' => 'footer_styling_widgets-links-text-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Links text color', THEME_DOMAIN),
                    'subtitle' => __('Pick a main color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#222222',
                    'required' => ['footer_styling_widgets-links-text-override-color-enable', '=', true]
                ],
                [
                    'id' => 'footer_styling_widgets-links-text-hover-color-enable',
                    'type' => 'switch',
                    'title' => __('Links text color change on hover', THEME_DOMAIN),
                    'default' => false,
                    'required' => ['footer_styling_widgets-links-text-override-color-enable', '=', true]
                ],
                [
                    'id' => 'footer_styling_widgets-links-text-hover-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Links text hover color', THEME_DOMAIN),
                    'subtitle' => __('Pick a main color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#3366CC',
                    'required' => [
                        ['footer_styling_widgets-links-text-override-color-enable', '=', true],
                        ['footer_styling_widgets-links-text-hover-color-enable', '=', true]
                    ]
                ],
                [
                    'id'     => 'footer_styling_section-widgets-end',
                    'type'   => 'section',
                    'indent' => false,
                ]
            ]
        ]);
        
    }

}
