<?php

namespace Them\General\Sections;

use Them\ISection;
use Them\Helpers;

class Styling implements ISection {

    public static function addSection() {
        
        $registry = Helpers\Registry::getInstance();
        $patterns = $registry['patterns'];

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Styling', THEME_DOMAIN),
            'desc' => __('Styling Settings', THEME_DOMAIN),
            'id' => 'general_styling',
            'subsection' => true,
            'fields' => [
                [
                    'id' => 'general_styling_body-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Body text color', THEME_DOMAIN),
                    'subtitle' => __('Pick a main color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#585858',
                ],
                [
                    'id' => 'general_styling_primary-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Primary color', THEME_DOMAIN),
                    'subtitle' => __('Pick a main color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#336699',
                ],
                [
                    'id' => 'general_styling_secondary-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Secondary color', THEME_DOMAIN),
                    'subtitle' => __('Pick a secondary color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#888888',
                ],
                [
                    'id' => 'general_styling_link-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Link color', THEME_DOMAIN),
                    'subtitle' => __('Pick a link color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#336699',
                ],
                [
                    'id' => 'general_styling_link-hover-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Link hover color', THEME_DOMAIN),
                    'subtitle' => __('Pick a main color for the theme (default: #000).++', THEME_DOMAIN),
                    'default' => '#3366CC',
                ],
                [
                    'id'       => 'general_styling_background-page-type',
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
                    'id' => 'general_styling_background-page-color',
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
                    'required' => ['general_styling_background-page-type', '=', 'color']
                ],
                [
                    'id' => 'general_styling_background-page-pattern',
                    'type' => 'image_select',
                    'class' => 'them_patterns them_button_set',
                    'tiles' => true,
                    'options' => $patterns,
                    'default' => '01',
                    'required' => ['general_styling_background-page-type', '=', 'pattern']
                ],
                [
                    'id'       => 'general_styling_background-page-image',
                    'type'     => 'background',
                    'subtitle' => __('Body background with image, color, etc.', THEME_DOMAIN),
                    'class' => 'them_button_set',
                    'desc'     => __('This is the description field, again good for additional info.', THEME_DOMAIN),
                    'required' => ['general_styling_background-page-type', '=', 'image']
                ],
            ]
        ]);
        
    }

}
