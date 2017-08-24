<?php

namespace Them\Sections\LogoFavicon;

use Them\Sections\ISection;

class Favicon implements ISection {

    public static function addSection() {

        \Redux::setSection(THEME_DOMAIN, [
            'title' => __('Favicon', THEME_DOMAIN),
            'desc' => __('Favicon Settings', THEME_DOMAIN),
            'id' => 'logofavicon_favicon',
            'subsection' => true,
            'fields' => [
                [
                    'id' => 'logofavicon_favicon_default',
                    'type' => 'media',
                    'title' => __('Default Favicon', THEME_DOMAIN),
                    'subtitle' => __('Default favicon for your website at 16px x 16px.', THEME_DOMAIN),
                    'compiler' => 'true',
                    'default' => ['url' => 'http://s.wordpress.org/style/images/codeispoetry.png'],
                ],
                [
                    'id' => 'logofavicon_favicon_iphone',
                    'type' => 'media',
                    'title' => __('Apple iPhone Icon', THEME_DOMAIN),
                    'subtitle' => __('Favicon for Apple iPhone at 57px x 57px.', THEME_DOMAIN),
                    'compiler' => 'true',
                    'default' => ['url' => 'http://s.wordpress.org/style/images/codeispoetry.png'],
                ],
                [
                    'id' => 'logofavicon_favicon_ipad',
                    'type' => 'media',
                    'title' => __('Apple iPad Icon', THEME_DOMAIN),
                    'subtitle' => __('Favicon for Apple iPad at 72px x 72px.', THEME_DOMAIN),
                    'compiler' => 'true',
                    'default' => ['url' => 'http://s.wordpress.org/style/images/codeispoetry.png'],
                ]
            ]
        ]);
        
    }

}
