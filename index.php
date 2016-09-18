<?php
/**
 * Created by PhpStorm.
 * User: Adi
 * Date: 9/18/2016
 * Time: 2:11 AM
 */
if(isset($_GET['url'])){
    echo "My First MVC TEsT<br>";
    $url=$_GET['url'];
    $url=rtrim($url,"/");
    $url=explode("/",$url);
    var_dump($url);
}
else{
    echo "My First MVC TEsT";
}