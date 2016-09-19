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
        //check if the url parameter is set
        if(isset($_GET['url']))
        {
            //load the url into a variable
            $url=$_GET['url'];
            //trim the url to remove slashes('/') in the right
            $url=rtrim($url,'/');
            //break the url to fragments
            $url=explode("/",$url);
            //load the url fragments to object variable routes
            foreach ($url as $key=>$value)
            {
                $this->routes[$key]=$value;
            }
            //check if the first fragment exists
            if(isset($this->routes['0']))
            {
                //load the first url fragment into a variable
                $alpha=$this->routes['0'];
                //mathe first letter of url fragment a capital case
                $alpha=ucfirst($alpha);
                //defile controller file name
                $file=$alpha.'Controller.php';
                $file_path="app".DS."controllers".DS.$file;
                ////Check if the respective controller file exists or not
                if(file_exists($file_path))
                {
                    require_once ($file_path);
                    $class=$alpha.'Controller';
                    //Check if the controller class for given url exixts
                    if(class_exists($class))
                    {
                        //if File Exists
                        //Load it and create an object
                        $classObj=new $class;
                        //Check if second route fragment exists
                        if(isset($this->routes['1']))
                        {
                            //if exists than name it as $method
                            $method=$this->routes['1'];
                            //check if method of name $method exists in class $class
                            if(method_exists($class,$method))
                            {
                                //if exists than call it
                                $classObj->$method();
                            }
                            else
                            {
                                //if not exixts than call the no_operation() method
                                $classObj->no_operation();
                            }
                        }
                        else
                        {
                            //if second fragment is not mentioned call the main() function of class $class
                            $classObj->main();
                        }
                    }
                    //if class donot exists than call the main() method of default AppController class
                    else
                    {
                        require_once("app".DS."controllers".DS."AppController.php");
                        $classObj=new AppController();
                        $classObj->main();
                    }
                }
                //if respective controller file doesnot exists
                else
                {
                    require_once("app".DS."controllers".DS."AppController.php");
                    //check if there is a method by that name in the default AppControler class
                    if(method_exists('AppController',$this->routes['0']))
                    {
                        $classObj=new AppController();
                        $method=$this->routes['0'];
                        $classObj->$method();
                    }
                    //if there is no such method in the default AppController method\
                    //call the main() function of the AppController class
                    else
                    {
                        require_once("app".DS."controllers".DS."AppController.php");
                        $classObj=new AppController();
                        $classObj->main();
                    }
                }
            }
        }
        else
        {   //If nothing is mentioned in the url
            //Call default function of AppController
            require_once("app".DS."controllers".DS."AppController.php");
            $classObj=new AppController();
            $classObj->main();
        }
    }
}
$newObject=new My_Mvc();
$newObject->router();