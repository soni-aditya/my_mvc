<?php
/**
 **MY FIRST BATCH OF MVC FRAMEWORK OF MY OWN
 * AUTHOR-Aditya Soni
 * website-www.techieeasy.com
 */
// Directory- lib/node.php
//class which holds the data to the view

class basket{

    var $node=array();
    function set($key,$value)
    {
        //$this->alpha=math
        $this->node[$key]=$value;
    }
    function get($key)
    {
        if(isset($this->node[$key]))
            return $this->node[$key];
        else
            return null;
    }
}