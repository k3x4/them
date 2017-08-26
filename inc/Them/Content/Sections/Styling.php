<?php

namespace Them\Content\Sections;

use Them\ISection;
use Them\Helpers;

class Styling implements ISection {

    public static function addSection() {
        
        $registry = Helpers\Registry::getInstance();
        $patterns = $registry['patterns'];

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Styling', THEME_DOMAIN),
            'desc' => __('Styling Settings', THEME_DOMAIN),
            'id' => 'content_styling',
            'subsection' => true,
            'fields' => [
                [
                    'id'       => 'content_styling_background-wrapper-type',
                    'type'     => 'button_set',
                    'title'    => __('Wrapper background', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'options' => [
                        'color' => 'Color', 
                        'pattern' => 'Pattern', 
                        'image' => 'Custom Image'
                    ], 
                    'default' => 'color'
                ],
                [
                    'id' => 'content_styling_background-wrapper-color',
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
                    'required' => ['content_styling_background-wrapper-type', '=', 'color']
                ],
                [
                    'id' => 'content_styling_background-wrapper-pattern',
                    'type' => 'image_select',
                    'class' => 'them_patterns them_button_set',
                    'tiles' => true,
                    'options' => $patterns,
                    'default' => '01',
                    'required' => ['content_styling_background-wrapper-type', '=', 'pattern']
                ],
                [
                    'id'       => 'content_styling_background-wrapper-image',
                    'type'     => 'background',
                    'subtitle' => __('Body background with image, color, etc.', THEME_DOMAIN),
                    'class' => 'them_button_set',
                    'desc'     => __('This is the description field, again good for additional info.', THEME_DOMAIN),
                    'required' => ['content_styling_background-wrapper-type', '=', 'image']
                ],
                [
                    'id'       => 'content_styling_background-blocks-type',
                    'type'     => 'button_set',
                    'title'    => __('Content blocks background', THEME_DOMAIN),
                    'subtitle' => __('No validation can be done on this field type', THEME_DOMAIN),
                    'options' => [
                        'color' => 'Color', 
                        'pattern' => 'Pattern', 
                        'image' => 'Custom Image'
                    ], 
                    'default' => 'color'
                ],
                [
                    'id' => 'content_styling_background-blocks-color',
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
                    'required' => ['content_styling_background-blocks-type', '=', 'color']
                ],
                [
                    'id' => 'content_styling_background-blocks-pattern',
                    'type' => 'image_select',
                    'class' => 'them_patterns them_button_set',
                    'tiles' => true,
                    'options' => $patterns,
                    'default' => '01',
                    'required' => ['content_styling_background-blocks-type', '=', 'pattern']
                ],
                [
                    'id'       => 'content_styling_background-blocks-image',
                    'type'     => 'background',
                    'subtitle' => __('Body background with image, color, etc.', THEME_DOMAIN),
                    'class' => 'them_button_set',
                    'desc'     => __('This is the description field, again good for additional info.', THEME_DOMAIN),
                    'required' => ['content_styling_background-blocks-type', '=', 'image']
                ],
            ]
        ]);
        
    }

}
