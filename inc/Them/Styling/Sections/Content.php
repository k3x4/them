<?php

namespace Them\Styling\Sections;

use Them\ISection;
use Them\Helpers;

class Content implements ISection {

    public static function addSection() {
        
        $registry = Helpers\Registry::getInstance();
        $patterns = $registry['patterns'];

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Content', THEME_DOMAIN),
            'desc' => __('Content Settings', THEME_DOMAIN),
            'id' => 'styling_content',
            'subsection' => true,
            'fields' => [
                [
                    'id'       => 'styling_content_background-wrapper-type',
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
                    'id' => 'styling_content_background-wrapper-color',
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
                    'required' => ['styling_content_background-wrapper-type', '=', 'color']
                ],
                [
                    'id' => 'styling_content_background-wrapper-pattern',
                    'type' => 'image_select',
                    'class' => 'them_patterns them_button_set',
                    'tiles' => true,
                    'options' => $patterns,
                    'default' => '01',
                    'required' => ['styling_content_background-wrapper-type', '=', 'pattern']
                ],
                [
                    'id'       => 'styling_content_background-wrapper-image',
                    'type'     => 'background',
                    'subtitle' => __('Body background with image, color, etc.', THEME_DOMAIN),
                    'class' => 'them_button_set',
                    'desc'     => __('This is the description field, again good for additional info.', THEME_DOMAIN),
                    'required' => ['styling_content_background-wrapper-type', '=', 'image']
                ],
                [
                    'id'       => 'styling_content_background-blocks-type',
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
                    'id' => 'styling_content_background-blocks-color',
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
                    'required' => ['styling_content_background-blocks-type', '=', 'color']
                ],
                [
                    'id' => 'styling_content_background-blocks-pattern',
                    'type' => 'image_select',
                    'class' => 'them_patterns them_button_set',
                    'tiles' => true,
                    'options' => $patterns,
                    'default' => '01',
                    'required' => ['styling_content_background-blocks-type', '=', 'pattern']
                ],
                [
                    'id'       => 'styling_content_background-blocks-image',
                    'type'     => 'background',
                    'subtitle' => __('Body background with image, color, etc.', THEME_DOMAIN),
                    'class' => 'them_button_set',
                    'desc'     => __('This is the description field, again good for additional info.', THEME_DOMAIN),
                    'required' => ['styling_content_background-blocks-type', '=', 'image']
                ],
            ]
        ]);
        
    }

}
