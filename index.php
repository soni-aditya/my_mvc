<?php
/**
 **MY FIRST BATCH OF MVC FRAMEWORK OF MY OWN
 * AUTHOR-Aditya Soni
 * website-www.techieeasy.com
 */
//OBJECT ROUTING

class My_Mvc{
    public $routes=array();

    function router(){
        if(isset($_GET['url']))
        {
            $url=$_GET['url'];
            $url=rtrim($url,'/');
            $url=explode("/",$url);

            foreach ($url as $key=>$value){
                $this->routes[$key]=$value;
            }
            require_once("app/controller.php");
            if(isset($this->routes['0'])){
                $method=$this->routes['0'];
                if(method_exists('AppController',$method)){
                    $controller=new AppController();
                    $controller->$method();
                }
                else{
                    $controller=new AppController();
                    $controller->main();
                }
            }
        }
    }
}
$newObject=new My_Mvc();
$newObject->router();