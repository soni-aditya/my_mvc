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
            self::$instance[$class]=new $class();
            return self::$instance[$class];
        }
    }
}