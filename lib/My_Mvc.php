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
            //if class donot exist than load[require] that class
            if(!class_exists($class))
            {
                self::autoload($class);
            }
            //if class we are calling is pdo than
            if($class=='pdo')
            {
                //store loaded class instance
                self::$instance[$class]=new PDO('mysql:host=localhost;dbname=mymvc','root','mysql');
            }
            else
            {
                //store loaded class instance
                self::$instance[$class]=new $class();
            }
            return self::$instance[$class];
        }
    }
    //method for loading the unloaded class
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
    //function for rendering us from one view/template to another
    public static function render($view)
    {
        $my_mvc=My_Mvc::getInstance('My_Mvc');
        $my_mvc->set('view',$view);
        $tmp=self::$tmpl;

        $request=My_Mvc::getInstance('request');
        ///For switching templates if user types wwww.***/***/***/***&tmpl=XXXX
        //this tmpl is our variable
        if($request->get('tmpl')!=null)
        {
            $tmp=$request->get('tmpl');
        }
        ///For switching different fromates or views
        //this type is our variable
        $basket=My_Mvc::getInstance('basket');
        //if user types wwww.***/***/***/***&api=json&hash=aditya
        //hash is like a password here
        if($request->get('api')==='json'&&$request->get('hash')==='aditya')
        {
            echo json_encode($basket);
        }
        //if user types wwww.***/***/***/***&api=html&hash=aditya
        //hash is like a password here
        else if($request->get('api')==='html'&& $request->get('hash')==='aditya')
        {
            require_once ("app".DS."views".DS.$view.DS."default.php");
        }
        else
        {
            require_once ("templates".DS.$tmp.DS."index.php");
        }
    }
    public static function app()
    {
        $my_mvc=My_Mvc::getInstance('My_Mvc');
        $view=$my_mvc->get('view');
        require_once ("app".DS."views".DS.$view.DS."default.php");
    }

    public static function getModel($model)
    {
        $file="app".DS."models".DS.$model.".php";
        if(file_exists($file))
        {
            require_once $file;
            $model_obj=new $model();
            return $model_obj;
        }
        else
        {
            echo "Model doesn't exist";
        }
    }
}