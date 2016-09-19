<?php
/**
 * Created by PhpStorm.
 * User: Adi
 * Date: 9/18/2016
 * Time: 2:32 PM
 */
//package= app/controllers/UserController.php

//This controller Handels all the users related functions

class UserController{
    function main(){
        echo "You are in the User zone";
    }
    function recent(){
        echo "Recent users are adi,aditya,akash";
    }
    function lists(){
        echo "<h1>USER LIST</h1>";
        echo "<br><br>Aditya<br>Akash<br>Adi";
    }
    function no_operation(){
        echo "No such Operation exists";
    }
}