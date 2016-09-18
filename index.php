<?php
/**
 **MY FIRST BATCH OF MVC FRAMEWORK OF MY OWN
 * AUTHOR-Aditya Soni
 * website-www.techieeasy.com
 */
if(isset($_GET['url'])){
    $url=$_GET['url'];
    $url=rtrim($url,"/");
    $url=explode("/",$url);
    /*Here we are applying functions instead of switch case
       *its the more recommended method
    */
    function about($name){
        echo "This page is about ".$name;
    }
    function services($service){
        echo "This page is about ".$service;
    }
    function contact($number){
        echo "This page is about ".$number;
    }

    if(function_exists($url['0'])){
        if(isset($url['1'])){
            $url['0']($url['1']);
        }
        else{
            $url['0']('a');
        }
    }
}
else{
    echo "My First MVC TEsT";
}