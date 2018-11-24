<?php
namespace Singleton;

class Singleton {

    private static $instance;

    private function __construct() {}

    public static function getInstance()
    {

        if(empty(self::$instance)) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

}
