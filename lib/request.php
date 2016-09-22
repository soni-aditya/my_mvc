<?php
/**
 **MY FIRST BATCH OF MVC FRAMEWORK OF MY OWN
 * AUTHOR-Aditya Soni
 * website-www.techieeasy.com
 */
//stores the request parameters to request objects
class request
{
    var $node=array();
    public function __construct()
    {
        foreach ($_REQUEST as $key=>$value)
        {
            $this->node[$key]=$value;
        }
    }
    function get($key)
    {
        if(isset($this->node[$key]))
            return $this->node[$key];
        else
            return null;
    }
}