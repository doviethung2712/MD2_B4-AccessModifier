<?php

class Application
{
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance(): Application
    {
        if (self::$instance === null) {
            self::$instance = new Application();
            echo "hello bấy bề";
        }
        return self::$instance;
    }
}

$app1 = Application::getInstance();
echo "<br>";
$app2 = Application::getInstance();
//$app3 = new Application();