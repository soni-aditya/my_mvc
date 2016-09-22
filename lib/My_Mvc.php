<?php
/**
 **MY FIRST BATCH OF MVC FRAMEWORK OF MY OWN
 * AUTHOR-Aditya Soni
 * website-www.techieeasy.com
 */
// Directory- lib/My_Mvc.php

class My_Mvc
{
    var $node=array();
    private static $instance=array();
    public static $tmpl='starter';

    function main()
    {
        require_once ("lib".DS."node.php");
        $node=My_Mvc::getInstance('node');
        $node->router();
    }
    function set($key,$value)
    {
        $this->node[$key]=$value;
    }
    function get($key)
    {
        if(isset($this->node[$key]))
            return $this->node[$key];
        else
            return null;
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
    public static function render($view)
    {
        $my_mvc=My_Mvc::getInstance('My_Mvc');
        $my_mvc->set('view',$view);

        $request=My_Mvc::getInstance('request');
        $tmp=$request->get('tmpl');
        if($tmp==null)
        {
            $tmp=self::$tmpl;
        }
        require_once ("templates".DS.$tmp.DS."index.php");
    }
    public static function app()
    {
        $my_mvc=My_Mvc::getInstance('My_Mvc');
        $view=$my_mvc->get('view');
        require_once ("app".DS."views".DS.$view.DS."default.php");
    }
}