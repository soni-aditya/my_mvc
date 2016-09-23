<?php
/**
 * Created by PhpStorm.
 * User: Adi
 * Date: 9/18/2016
 * Time: 2:32 PM
 */
//package= app/controllers/AppController.php
class AppController{
    function main(){
        My_Mvc::render('root');
    }
    function about(){
        My_Mvc::render('about');
    }
    function contact(){
        My_Mvc::render('contact');
    }
    function services(){
        My_Mvc::render('services');
    }
    function no_operation(){
        echo "No such Operation exists";
    }
}