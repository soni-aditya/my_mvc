<?php
/**
 **MY FIRST BATCH OF MVC FRAMEWORK OF MY OWN
 * AUTHOR-Aditya Soni
 * website-www.techieeasy.com
 */
//triggering My_Mvc class
define('DS',DIRECTORY_SEPARATOR);
require_once ("lib".DS."My_Mvc.php");

$newObject=My_Mvc::getInstance('My_Mvc');
$newObject->main();