<?php

namespace Them\Sections\Typography;

use Them\Sections\ISection;

class Menu implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Menu Typography', THEME_DOMAIN),
            'desc' => __('Menu Typography Settings', THEME_DOMAIN),
            'id' => 'typography_menu',
            'subsection' => true,
            'fields' => [
                [
                    'id' => 'typography_menu_items-override-font',
                    'type' => 'switch',
                    'title' => __('Override menu items font', THEME_DOMAIN),
                    'subtitle' => __('Look, it\'s on!', THEME_DOMAIN),
                    'default' => false,
                ],
                [
                    'id' => 'typography_menu_items-font',
                    'type' => 'typography',
                    'title' => __('Menu items font', THEME_DOMAIN),
                    'all_styles' => true,
                    'color' => false,
                    'subtitle' => __('These settings control the typography for all menu items.', THEME_DOMAIN),
                    'select2' => ['allowClear' => false],
                    'default' => [
                        'font-family' => 'Open Sans',
                        'font-size' => '14px',
                        'line-height' => '16px',
                        'font-style' => '400',
                        'google' => true,
                        'text-align' => 'left',
                        
                    ],
                    'required' => ['typography_menu_items-override-font', '=', true]
                ]
            ]
        ]);
        
    }

}
