<?php
/**
 **MY FIRST BATCH OF MVC FRAMEWORK OF MY OWN
 * AUTHOR-Aditya Soni
 * website-www.techieeasy.com
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