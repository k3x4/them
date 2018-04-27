<?php

namespace Them\Header\Sections;

use Them\ISection;

class Sticky implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Sticky', THEME_DOMAIN),
            'desc' => __('Sticky Header Settings', THEME_DOMAIN),
            'id' => 'header_sticky',
            'subsection' => true,
            'fields' => [
                [
                    'id' => 'header_sticky_default',
                    'type' => 'switch',
                    'title' => 'Sticky Header',
                    'subtitle' => 'Turn on to enable a sticky header.',
                    'default' => false
                ],
                [
                    'id' => 'header_sticky_tablets',
                    'type' => 'switch',
                    'title' => 'Sticky Header on Tablets',
                    'subtitle' => 'Turn on to enable a sticky header when scrolling on tablets.',
                    'default' => false,
                    'required' => ['header_sticky_default', '=', true]
                ],
                [
                    'id' => 'header_sticky_mobiles',
                    'type' => 'switch',
                    'title' => 'Sticky Header on Mobiles',
                    'subtitle' => 'Turn on to enable a sticky header when scrolling on mobiles.',
                    'default' => false,
                    'required' => ['header_sticky_default', '=', true]
                ],
                [
                    'id' => 'header_sticky_animation',
                    'type' => 'switch',
                    'title' => 'Sticky Header Animation',
                    'subtitle' => 'Turn on to allow the sticky header to animate to a smaller height when activated.',
                    'default' => false,
                    'required' => ['header_sticky_default', '=', true]
                ],
                [
                    'id' => 'header_sticky_offset',
                    'type' => 'dimensions',
                    'units' => ['px'],
                    'width' => false,
                    'title' => __('Offset sticky appearing', THEME_DOMAIN),
                    'default' => [
                        'height' => 0,
                    ],
                ],
                [
                    'id' => 'header_sticky_background-color',
                    'type' => 'color',
                    'transparent' => false,
                    'title' => __('Sticky Header Background Color', THEME_DOMAIN),
                    'subtitle' => __('Controls the background color for the sticky header.', THEME_DOMAIN),
                    'default' => '#FFFFFF',
                    'required' => ['header_sticky_default', '=', true]
                ],
                /*
                [
                    'id' => 'header_sticky_menu-item-padding',
                    'type' => 'them_spacing',
                    'mode' => 'margin',
                    'units' => ['px'],
                    'units_extended' => true,
                    'title' => __('Sticky Header Menu Item Padding', THEME_DOMAIN),
                    'subtitle' => __('Controls the space inside each menu item in the sticky header.', THEME_DOMAIN),
                    'default' => [
                        'sameall' => '1',
                        'padding-top' => '0px',
                        'padding-right' => '0px',
                        'padding-bottom' => '0px',
                        'padding-left' => '0px',
                        'units' => 'px'
                    ],
                    'select2' => ['allowClear' => false],
                    'required' => ['header_sticky_default', '=', true]
                ],
                [
                    'id' => 'header_sticky_menu-item-margin',
                    'type' => 'them_spacing',
                    'mode' => 'margin',
                    'units' => ['px'],
                    'units_extended' => true,
                    'title' => __('Sticky Header Menu Item Margin', THEME_DOMAIN),
                    'subtitle' => __('Controls the space between each menu item in the sticky header.', THEME_DOMAIN),
                    'default' => [
                        'sameall' => '1',
                        'margin-top' => '0px',
                        'margin-right' => '0px',
                        'margin-bottom' => '0px',
                        'margin-left' => '0px',
                        'units' => 'px'
                    ],
                    'select2' => ['allowClear' => false],
                    'required' => ['header_sticky_default', '=', true]
                ],
                */
                
            ]
        ]);
        
    }

}
