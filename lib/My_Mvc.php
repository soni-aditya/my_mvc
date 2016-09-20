<?php
/**
 **MY FIRST BATCH OF MVC FRAMEWORK OF MY OWN
 * AUTHOR-Aditya Soni
 * website-www.techieeasy.com
 */
// Directory- lib/My_Mvc.php

class My_Mvc
{
    private static $instance=array();
    function main()
    {
        require_once ("lib".DS."node.php");
        $node=My_Mvc::getInstance('node');
        $node->router();
    }
    public static function getInstance($class)
    {
        if(isset(self::$instance[$class]))
        {
            return self::$instance[$class];
        }
        else
        {
            if(!class_exists($class))
            {
                self::autoload($class);
            }
                self::$instance[$class]=new $class();
                return self::$instance[$class];
        }
    }
    private static function autoload($class)
    {
        $paths=array('lib','app'.DS.'controllers','app'.DS.'models');

        foreach ($paths as $path)
        {
            $file=$path.DS.$class.'.php';

            if(file_exists($file))
            {
                require_once $file;
            }
        }
    }
}