<?php

namespace Them\Header\Sections;

use Them\ISection;
use Them\Helpers;

class Styling implements ISection {

    public static function addSection() {  
        
        $registry = Helpers\Registry::getInstance();
        $patterns = $registry['patterns'];

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Styling', THEME_DOMAIN),
            'desc' => __('Styling Settings', THEME_DOMAIN),
            'id' => 'header_styling',
            'subsection' => true,
            'fields' => [
                
                /*** BACKGROUND ***/
                [
                    'id' => 'header_styling_section-background-start',
                    'type' => 'section',
                    'title' => __('Background', THEME_DOMAIN),
                    'indent' => true 
                ],   
                [
                    'id'       => 'header_styling_background-header-type',
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
                    'id' => 'header_styling_background-header-color',
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
                    'required' => ['header_styling_background-header-type', '=', 'color']
                ],
                [
                    'id' => 'header_styling_background-header-pattern',
                    'type' => 'image_select',
                    'class' => 'them_patterns them_button_set',
                    'tiles' => true,
                    'options' => $patterns,
                    'default' => '01',
                    'required' => ['header_styling_background-header-type', '=', 'pattern']
                ],
                [
                    'id'       => 'header_styling_background-header-image',
                    'type'     => 'background',
                    'subtitle' => __('Body background with image, color, etc.', THEME_DOMAIN),
                    'class' => 'them_button_set',
                    'desc'     => __('This is the description field, again good for additional info.', THEME_DOMAIN),
                    'required' => ['header_styling_background-header-type', '=', 'image']
                ],
                [
                    'id'     => 'header_styling_section-background-end',
                    'type'   => 'section',
                    'indent' => false,
                ],
                
                /*** CONTAINER ***/
                [
                    'id' => 'header_styling_section-container-start',
                    'type' => 'section',
                    'title' => __('Container', THEME_DOMAIN),
                    'indent' => true 
                ],
                [
                    'id'       => 'header_styling_background-container-type',
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
                    'id' => 'header_styling_background-container-color',
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
                    'required' => ['header_styling_background-container-type', '=', 'color']
                ],
                [
                    'id' => 'header_styling_background-container-pattern',
                    'type' => 'image_select',
                    'class' => 'them_patterns them_button_set',
                    'tiles' => true,
                    'options' => $patterns,
                    'default' => '01',
                    'required' => ['header_styling_background-container-type', '=', 'pattern']
                ],
                [
                    'id'       => 'header_styling_background-container-image',
                    'type'     => 'background',
                    'class' => 'them_button_set',
                    'subtitle' => __('Body background with image, color, etc.', THEME_DOMAIN),
                    'desc'     => __('This is the description field, again good for additional info.', THEME_DOMAIN),
                    'required' => ['header_styling_background-container-type', '=', 'image']
                ],
                [
                    'id'     => 'header_styling_section-container-end',
                    'type'   => 'section',
                    'indent' => false,
                ]
            ]
        ]);
        
    }

}
