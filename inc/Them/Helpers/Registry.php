<?php

namespace Them\Helpers;

class Registry implements \ArrayAccess {

    private static $instance = null;
    private $options = [];
    private $container = [];

    private function __construct() {
        $this->buildOptions();
    }

    public function buildOptions() {
        $them = get_option(THEME_DOMAIN);

        foreach ($them as $key => $value) {
            $keyParts = explode('_', $key);
            if (count($keyParts) < 3)
                continue;

            list($section, $subSection, $option) = $keyParts;

            if (!isset($this->options[$section])) {
                $this->options[$section] = [];
            }

            if (!isset($this->options[$section][$subSection])) {
                $this->options[$section][$subSection] = [];
            }

            $this->options[$section][$subSection][$option] = $value;
        }
    }

    public static function getInstance() {
        if (!isset(static::$instance)) {
            static::$instance = new static;
        }
        return static::$instance;
    }

    public static function getOptions($className) {
        
        if (!isset(static::$instance)) {
            static::$instance = new static;
        }
        
        list($vendor, $section, $main, $subSection) = explode('\\', $className);
        $section = strtolower($section);
        $subSection = strtolower($subSection);
        
        if (isset(static::$instance->options[$section][$subSection])) {
            return static::$instance->options[$section][$subSection];
        }
        
        return null;
    }
    
    // ARRAYACCESS
    
    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->container[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

}
