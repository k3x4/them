<?php

namespace Them\Sections\Header;

use Them\Sections\ISection;

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
                    'default' => true,
                    'required' => ['header_sticky_default', '=', true]
                ],
                [
                    'id' => 'header_sticky_background-color',
                    'type' => 'color',
                    'title' => __('Sticky Header Background Color', THEME_DOMAIN),
                    'subtitle' => __('Controls the background color for the sticky header.', THEME_DOMAIN),
                    'default' => '#000000',
                    'required' => ['header_sticky_default', '=', true]
                ],
                [
                    'id' => 'header_sticky_menu-item-margin',
                    'type' => 'spacing',
                    'mode' => 'margin',
                    'units' => ['px', 'em', '%'],
                    'units_extended' => true,
                    'title' => __('Sticky Header Menu Item Margin', THEME_DOMAIN),
                    'subtitle' => __('Controls the space between each menu item in the sticky header.', THEME_DOMAIN),
                    'default' => [
                        'margin-top' => '1',
                        'margin-right' => '2',
                        'margin-bottom' => '3',
                        'margin-left' => '4',
                        'units' => 'px'
                    ],
                    'required' => ['header_sticky_default', '=', true]
                ],
                [
                    'id' => 'header_sticky_menu-item-padding',
                    'type' => 'spacing',
                    'mode' => 'padding',
                    'units' => ['px', 'em', '%'],
                    'units_extended' => true,
                    'title' => __('Sticky Header Menu Item Padding', THEME_DOMAIN),
                    'subtitle' => __('Controls the space inside each menu item in the sticky header.', THEME_DOMAIN),
                    'default' => [
                        'padding-top' => '1px',
                        'padding-right' => '2px',
                        'padding-bottom' => '3px',
                        'padding-left' => '4px',
                        'units' => 'px'
                    ],
                    'required' => ['header_sticky_default', '=', true]
                ],
                [
                    'id' => 'header_sticky_nav_font_size',
                    'type' => 'text',
                    'title' => __('Sticky Header Navigation Font Size', THEME_DOMAIN),
                    'subtitle' => __('Controls the font size of the menu items in the sticky header.', THEME_DOMAIN),
                    'default' => '12px',
                    'required' => ['header_sticky_default', '=', true]
                ]
            ]
        ]);
        
    }

}
