<?php

namespace Them;

class Autoloader {

    static public function loader($className) {
        if (strpos($className, 'Them') !== FALSE) {
            $filename = THEME_DIR . '/inc/' . str_replace("\\", '/', $className) . ".php";
            if (file_exists($filename)) {
                require_once $filename;
            }
        }
    }

}

spl_autoload_register('Them\\Autoloader::loader');
