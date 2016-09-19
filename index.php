<?php
/**
 **MY FIRST BATCH OF MVC FRAMEWORK OF MY OWN
 * AUTHOR-Aditya Soni
 * website-www.techieeasy.com
 */
//OBJECT ROUTING
define('DS',DIRECTORY_SEPARATOR);

class My_Mvc
{
    public $routes=array();

    function router()
    {
        if(isset($_GET['url']))
        {
            $url=$_GET['url'];
            $url=rtrim($url,'/');
            $url=explode("/",$url);

            foreach ($url as $key=>$value)
            {
                $this->routes[$key]=$value;
            }
            //require_once("app".DS."controllers".DS."AppController.php");
            if(isset($this->routes['0']))
            {
                $alpha=$this->routes['0'];
                $alpha=ucfirst($alpha);
                $file=$alpha.'Controller.php';
                $file_path="app".DS."controllers".DS.$file;
                //echo $file_path;
                if(file_exists($file_path))
                {
                    require_once ($file_path);
                    $class=$alpha.'Controller';
                    if(class_exists($class))
                    {
                        $classObj=new $class;

                        if(isset($this->routes['1']))
                        {
                            $method=$this->routes['1'];
                            if(method_exists($class,$method))
                            {
                                $classObj->$method();
                            }
                            else
                            {
                                $classObj->no_operation();
                            }
                        }
                        else
                        {
                            $classObj->main();
                        }
                    }
                    else{
                        echo "Class doesnot exist";
                    }
                }
                else
                {
                    require_once("app".DS."controllers".DS."AppController.php");
                    if(method_exists('AppController',$this->routes['0'])){
                        $classObj=new AppController();
                        $method=$this->routes['0'];
                        $classObj->$method();
                    }
                    else{
                        require_once("app".DS."controllers".DS."AppController.php");
                        $classObj=new AppController();
                        $classObj->main();
                    }
                }
            }
        }
        else
        {   require_once("app".DS."controllers".DS."AppController.php");
            $classObj=new AppController();
            $classObj->main();
        }
    }
}
$newObject=new My_Mvc();
$newObject->router();